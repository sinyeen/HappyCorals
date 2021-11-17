#install.packages("plotly")
#install.packages("ggplot2")
library(plotly)
library(ggplot2)
library(htmlwidgets)
library(tidyr)

## SEA TEMPERATURE
sea_temp <- read.csv('sea-surface-temperature-anomaly1.csv')

# change col names
colnames(sea_temp)[4] <- "sea_surface_temp_avg"
colnames(sea_temp)[5] <- "sea_surface_temp_LCI"
colnames(sea_temp)[6] <- "sea_surface_temp_UCI"

#remove na
sea_temp <- sea_temp[,colSums(is.na(sea_temp))<nrow(sea_temp)]
df <- filter(sea_temp, Year >= 2000)

# create bar chart
fig <- plot_ly(df, x = ~Year, y = ~sea_surface_temp_avg, type = 'bar',
               marker = list(color = 'rgb(55, 83, 109)',
                             width = 1.5))
fig <- fig %>% layout(
  xaxis = list(title = "Year"),
  yaxis = list(title = "Sea surface temperature anomaly C"))
fig

# Publish
saveWidget(fig, "bar.html")
Sys.setenv("plotly_username"="sinyee0317")
Sys.setenv("plotly_api_key"="IiJ6PHh5tDFWQU6sXzm5")
api_create(fig, "sea temp")


## endemic reed-forming coral species
endemic_reef <- read.csv('endemic-reef-forming-coral-species (1).csv')

# change col names and filtering
colnames(endemic_reef)[4] <- "reef_forming_corals"
df1 <- filter(endemic_reef, reef_forming_corals > 0)
df1 <- filter(df1, Entity != "United States Minor Outlying Islands")

# create bar chart
fig1 <- plot_ly(df1, x = ~Entity, y = ~reef_forming_corals, type = 'bar',
                marker = list(color = 'rgb(55, 83, 109)',
                              width = 1.5))
fig1 <- fig1 %>% layout(
  xaxis = list(title = "Country"),
  yaxis = list(title = "Reef forming corals (total endemic)"))
fig1

# Publish
Sys.setenv("plotly_username"="sinyee0317")
Sys.setenv("plotly_api_key"="IiJ6PHh5tDFWQU6sXzm5")
api_create(fig1, "endemic reef")

## Number of coral bleaching events
bleach_event <- read.csv("coral-bleaching-events.csv")

# change col names and filtering
colnames(bleach_event)[4] <- "Moderate_bleaching_event"
colnames(bleach_event)[5] <- "Severe_bleaching_event"
df2 <- filter(bleach_event, Year > 1999)
df2 <- filter(df2, Entity == "Australasia")

# create bar chart
fig2 <- plot_ly(df2, x = ~Year, y = ~Severe_bleaching_event, type = 'bar', name = 'Severe', width=1.5)
fig2 <- fig2 %>% add_trace(y = ~Moderate_bleaching_event, name = 'Moderate')
fig2 <- fig2 %>% layout(yaxis = list(title = 'Number of event'), barmode = 'stack')

# Publish
Sys.setenv("plotly_username"="sinyee0317")
Sys.setenv("plotly_api_key"="tnsoPShyiA9i3mmpvUIL")
api_create(fig2, "bleaching event")

## MARINE DEBRIS DEPOSITION RATE
debris <- read.csv("decomposition-rates-marine-debris.csv")

# change col names and filtering
colnames(debris)[4] <- "decom_rate"
completeFun <- function(data, desiredCols) {
  completeVec <- complete.cases(data[, desiredCols])
  return(data[completeVec, ])
}
df3 <- completeFun(debris, "decom_rate")
df3$Entity[df3$Entity == "Plastic beverage holder (six-rings)"] <- "Plastic beverageholder"
df3 <- df3[-c(6), ]

# create bar chart
fig3 <- plot_ly(df3, x = ~decom_rate, y = ~Entity, type = 'bar',
               marker = list(color = 'rgb(55, 83, 109)',
                             width = 1.5))
fig3 <- fig3 %>% layout(

  xaxis = list(title = "Decomposition rate"),
  yaxis = list(title = "Debris item"))

# Publish
Sys.setenv("plotly_username"="sinyee0317")
Sys.setenv("plotly_api_key"="tnsoPShyiA9i3mmpvUIL")
api_create(fig3, "debris")

## GLOBAL PLASTIC PRODUCTION
plastic <- read.csv("global-plastics-production.csv")
colnames(plastic)[4] <- "plastic_production"

# plot line graph
fig4 <- plot_ly(plastic, x = ~Year, y = ~plastic_production, type = 'scatter', mode = 'lines',
               line = list(color = 'rgb(55, 83, 109)', width = 4)) 
fig4 <- fig4 %>% layout(
                      xaxis = list(title = "Year"),
                      yaxis = list (title = "Plastic production (metric tonnes)"))

# Publish
Sys.setenv("plotly_username"="sinyee0317")
Sys.setenv("plotly_api_key"="tnsoPShyiA9i3mmpvUIL")
api_create(fig4, "plastic")


## GLOBAL PLASTIC PRODUCTION
fate <- read.csv("global-plastic-fate.csv")
colnames(fate)[4] <- "est_share"

# filter data (split into 3)
df_discard <- filter(fate, Entity == "Discarded")
df_incinerate <- filter(fate, Entity == "Incinerated")
df_recycle <- filter(fate, Entity == "Recycled")

fig5 <- plot_ly(df_discard, x = ~df_discard$Year, y = ~df_discard$est_share, name = 'Discarded', type = 'scatter', mode = 'none', stackgroup = 'one', fillcolor = '#F5FF8D')
fig5 <- fig5 %>% add_trace(y = ~df_incinerate$est_share, name = 'Incinerated', fillcolor = '#4C74C9')
fig5 <- fig5 %>% add_trace(y = ~df_recycle$est_share, name = 'Recycled', fillcolor = '#50CB86')

fig5 <- fig5 %>% layout(
                      xaxis = list(title = "Year",
                                   showgrid = FALSE),
                      yaxis = list(title = "Estimated share, %",
                                   showgrid = FALSE))
# Publish
Sys.setenv("plotly_username"="sinyee0317")
Sys.setenv("plotly_api_key"="tnsoPShyiA9i3mmpvUIL")
api_create(fig5, "disposal")
