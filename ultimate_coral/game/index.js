
const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')


canvas.width = innerWidth
canvas.height = innerHeight

const scoreEl = document.querySelector('#scoreEl')
const startGamebtn = document.querySelector('#startGamebtn')
const modelEl= document.querySelector('#modelEl')
const bigScoreEl = document.querySelector('#bigScoreEl')



let playerImage = new Image();
playerImage.src = "image/coral.png";

let g1 = new Image();
g1.src = "image/food container (foam).png";
let g2 = new Image();
g2.src = "image/masks.png";
let g3 = new Image();
g3.src = "image/plactic bottle.png";
let g4 = new Image();
g4.src = "image/plastic bags.png";
let g5 = new Image();
g5.src = "image/straws.png";

let garbage_list = [g1,g2,g3,g4,g5]

function drawgarbage(x,y,w,h)
{
    item = garbage_list[Math.floor(Math.random()*garbage_list.length)];


    item.onload = function(){
        c.drawImage(item, x, y,w,h)
    }

}



function test(x,y,r,sa,ea,ak) {
    item = garbage_list[Math.floor(Math.random() * garbage_list.length)];





        pattern = c.createPattern(item, "repeat");
        c.strokeStyle = pattern;
        c.beginPath();
        c.arc(x, y, r, sa, ea, ak);
        c.stroke();


}
















function make_base(x,y)
{
    base_image = new Image()
    base_image.src = 'image/coral.png'


    base_image.onload = function(){
        c.drawImage(base_image, x, y,60,60)
    }

}


class Player {
    constructor(x,y,radius,color){
        this.x = x
        this.y = y

        this.radius = radius
        this.color = color
    }

    draw() {
        // c.beginPath()
        // c.arc(this.x,this.y,this.radius,0, Math.PI*2, false)
        // c.fillStyle = this.color
        // c.fill()
        make_base(this.x-40,this.y-30)


    }
}

class Projectile{
    constructor(x,y, radius, color, velocity){
        this.x = x
        this.y = y

        this.radius = radius
        this.color = color
        this.velocity = velocity
    }
    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()

    }
    update(){
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}

class Enemy{
    constructor(x,y, radius, color, velocity, item){
        this.x = x
        this.y = y

        this.radius = radius
        this.color = color
        this.velocity = velocity

        this.item = item

    }
    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        //c.fillStyle = this.color
        c.fillStyle = 'rgba( 255, 255, 255)'
        c.fill()
        //test(this.x, this.y, this.radius, 0, Math.PI * 2, false)


        //this.item.onload = function(){
        c.drawImage(this.item, this.x-20, this.y-20,this.radius*2,this.radius*2)

        //}

    }
    update(){
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}
const friction = 0.99
class Particle {
    constructor(x,y, radius, color, velocity){
        this.x = x
        this.y = y

        this.radius = radius
        this.color = color
        this.velocity = velocity
        this.alpha = 1
    }
    draw() {
        c.save()
        c.globalAlpha = this.alpha
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
        c.restore()
    }
    update(){
        this.draw()
        this.velocity.x *= friction
        this.velocity.y *= friction
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
        this.alpha -=0.01
    }
}

const x = canvas.width/2
const y = canvas.height/2

//let player = new Player(x,y,20,'#e3dac9')
//player.draw()
// const projectile = new Projectile(canvas.width/2, canvas.height/2,5,'red',
//     {
//         x:1,y:1
//     })
// const projectile2 = new Projectile(canvas.width/2, canvas.height/2,5,'green',
//     {
//         x:-1,y:-1
//     })
let projectiles = [] //use list to control projectiles and enmies
let enemies = []
let particles = []

function init(){
     player = new Player(x,y,20,'#FFFFFF')

// const projectile = new Projectile(canvas.width/2, canvas.height/2,5,'red',
//     {
//         x:1,y:1
//     })
// const projectile2 = new Projectile(canvas.width/2, canvas.height/2,5,'green',
//     {
//         x:-1,y:-1
//     })
     projectiles = [] //use list to control projectiles and enmies
     enemies = []
     particles = []
    score = 0
    scoreEl.innerHTML = score
    bigScoreEl.innerHTML = score
}

function spawnEnemies() {
    setInterval(()=> {
        //const radius = Math.random() * 40
        min = Math.ceil(8);
        max = Math.floor(40);
        const radius = Math.floor(Math.random() * (max - min)) + min;


        let x
        let y
        if (Math.random() < 0.5) {
            x = Math.random() * canvas.width
            y = Math.random() < 0.5 ? 0 - radius : canvas.height + radius
            //
         } else {
             x = Math.random() < 0.5 ? 0 - radius : canvas.width + radius
             y = Math.random() * canvas.height
            //Math.random() < 0.5 ? 0 - radius : canvas.height + radius

       }
        const color = `hsl(${Math.random()*360},50%, 50%)` // use ` to compute specific code
        const angle = Math.atan2(canvas.height/2 - y,
             canvas.width/2 - x)
        const velocity = {
            x: Math.cos(angle),
            y: Math.sin(angle)
        }
        item = garbage_list[Math.floor(Math.random()*garbage_list.length)]
        enemies.push(new Enemy(x,y,radius,color,velocity,item))

    },1100)
}

let animationId
let score = 0
function animate() {
    animationId = requestAnimationFrame(animate)
    //c.fillStyle = 'rgba(65, 105, 225,0.2)' //effect tail
    c.fillStyle = 'rgba(255,255,255,0.5)'
    //c.fillStyle = 'white'
    c.fillRect(0,0,canvas.width,canvas.height)
    player.draw()
   // make_base()
    // projectile.draw()
    // projectile.update()
    //c.clearRect(0,0,canvas.width,canvas.height)
    //player.draw()


    particles.forEach((particle,index) =>{
        particle.update()
        if(particle.alpha <= 0 ){
            particles.splice(index,1)
        }else{
            particle.update()
        }
    })
    projectiles.forEach(function (projectile, index) {
            projectile.update()
        //remove the projectile out of screen
            if(projectile.x + projectile.radius<0 ||
                projectile.x - projectile.radius > canvas.width||
                projectile.y + projectile.radius<0||
                projectile.y - projectile.radius> canvas.height){
                setTimeout(()=>{

                    projectiles.splice(index,1)
                }, 0)
            }


        }
    )
    enemies.forEach((enemy,index) => {
        enemy.update()
        const dist = Math.hypot(player.x - enemy.x, player.y - enemy.y)

        // game over
        if (dist - enemy.radius - player.radius < 1)
        {
            cancelAnimationFrame(animationId)
            modelEl.style.display = 'flex'
            bigScoreEl.innerHTML = score
        }
        projectiles.forEach((projectile,projectileIndex) =>{
        const dist = Math.hypot(projectile.x - enemy.x, projectile.y - enemy.y)
        // if hit enemy
        if (dist - enemy.radius - projectile.radius < 0.7)
        {

            //create firework
            for(let i = 0;i<enemy.radius * 2;i++){

                particles.push(new Particle(projectile.x, projectile.y, Math.random()*2, enemy.color,
                    {x:(Math.random()-0.5) * (Math.random() * 7), y: (Math.random() - 0.5) * (Math.random() * 7)}))
            }
            if(enemy.radius - 10> 6 ){
                //increase score
                score += 100
                scoreEl.innerHTML = score

                gsap.to(enemy,{
                    radius: enemy.radius - 10
                })//enemy.radius -= 10
                setTimeout(() => {

                    projectiles.splice(projectileIndex, 1)
                }, 0)
            }else {
                //increase score
                score += 250
                scoreEl.innerHTML = score

                setTimeout(() => {
                    enemies.splice(index, 1)
                    projectiles.splice(projectileIndex, 1)
                }, 0)
            }
        }
        })

    })
}

addEventListener('click',(event)=> {

    const angle = Math.atan2(event.clientY-canvas.height/2,
        event.clientX - canvas.width/2)
    const velocity = {
        x: Math.cos(angle) * 4,
        y: Math.sin(angle) * 4  // speed of projectile
    }
    projectiles.push(new Projectile(canvas.width/2,canvas.height/2,5,'#e3dac9', //push
        velocity))

})

startGamebtn.addEventListener('click',() =>{
    init()

    animate()
    spawnEnemies()
    modelEl.style.display = 'none'
})
