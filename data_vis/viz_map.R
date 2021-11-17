library(shiny)
library(leaflet)
library('rsconnect')
#######################
#rsconnect::deployApp('C:/Users/gogat/Desktop/SEM4/coral/final_app/app')
#rsconnect::configureApp("app", size="small")
final_data  = read.csv("./final_data.csv")
# setting up the UI 
ui = fluidPage( titlePanel("Coral Reef Zone classifications"),
                sidebarLayout(
                  sidebarPanel(  h4("What Each Zone stands for", align = "center"),br() ,strong("General Use Zone:-"),br(),p('Providing opportunity for reasonable use like tourism,fishing etc without permission.'),
                                 br(),strong("Marine National Park Zone:-"),br(),p('Permission is not needed to access but commercial activities like fishing are prohibited. This zone is used for recreational purpose.'),
                                 br(),strong("Habitat Protection Zone:-"),br(),p('this zone area is aimed to conservation of sensetive habitat from all damaging activities.'),
                                 br(),strong("Preservation Zone:-"),br(),p('This areas are generally undisturbed by man, the main focus is to promote preservation.'),
                                 br(),strong("Scientific Research Zone:-"),br(),p('This zone areas are focused towards providing opportunites for reasearch and to protect the natural integrity.')
                  ),
                  mainPanel(
                    
                    leafletOutput(outputId ="map_plot", width = "2050", height = "500"),
                    
                    absolutePanel(top = 140, left = 20,
                                  selectInput("zone",label = "Choose a type of zone",choices = c('General Use Zone','Marine National Park Zone','Habitat Protection Zone','Preservation Zone','Scientific Research Zone'))
                    )
                  )))

#server function block.
server = function(input, output,session) {
  
  # Setting the marker color pallete for visualization 
  pal <- colorFactor(
    palette = c("red2", "brown","royalblue3","magenta","purple"),
    #palette = 'Purples',
    domain = final_data$ZONE)
  
  selected_zone <- reactive({
    final_data[(final_data$ZONE == input$zone),]
  })
  
  #map plot. 
  output$map_plot = renderLeaflet({
    #we select the location from the data filtered above. The circle markers are set on the bases of latitude  and longitude.
    leaflet(selected_zone(),options = leafletOptions(maxZoom = 12)) %>%
      clearMarkers() %>%
      addTiles() %>%
      addCircleMarkers(lng = ~X_COORD,
                       lat = ~Y_COORD,
                       label = ~ LOCATION,
                       color = ~pal(ZONE),
                       #weight = 10,
                       radius = 7.5,
                       fillOpacity = 0.60)
  })}

shinyApp(ui = ui, server = server)
