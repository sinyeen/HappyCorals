const question = document.querySelector('#question');
const choices = Array.from(document.querySelectorAll('.choice-text'));
const progressText = document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {}
let acceptingAnswers = true
let score = 0
let questionCounter = 0
let availableQuestions = []

let questions = [
    {
        question: 'How are coral reefs made?',
        choice1: 'From hardened lava from volcanoes',
        choice2: 'From rocks that are forced up from the ocean floor',
        choice3: 'From hardened sea salt',
        choice4: 'From small living organisms call polyps',
        answer: 4,
    },
    {
        question:"What do polyps eat?",
        choice1: "Plankton",
        choice2: "Fish",
        choice3: "Seaweed",
        choice4: "They get their energy from photosynthesis",
        answer: 1,
    },
    {
        question: "Where would you not expect to find a coral reef?",
        choice1: "Near an island",
        choice2: "Near the coast",
        choice3: "Near the equator",
        choice4: "At the north pole",
        answer: 4,
    },
    {
        question: "The Great Barrier Reef is located off the coast of what country?",
        choice1: "Mexico",
        choice2: "Australia",
        choice3: "Japan",
        choice4: "India",
        answer: 2,
    },
    {
        question: "True or False: Coral reefs often help protect the shore line from erosion.",
        choice1: "True",
        choice2: "False",
        choice3: "I don't know",
        choice4: "I don't care",
        answer: 1,
    },
    {
        question: "How do humans damage coral reefs?",
        choice1: "Pollution",
        choice2: "Overfishing",
        choice3: "Touching them",
        choice4: "All of the above",
        answer: 4,
    }
]

const SCORE_POINTS = 100
const MAX_QUESTIONS = 10

startGame = () => {
    questionCounter = 0
    score = 0
    availableQuestions = [...questions]
    getNewQuestion()
}

getNewQuestion = () => {
    if(availableQuestions.length === 0 || questionCounter > MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score)

        return window.location.assign('end.html')
    }

    questionCounter++
    progressText.innerText = `Question ${questionCounter} of ${MAX_QUESTIONS}`
    progressBarFull.style.width = `${(questionCounter/MAX_QUESTIONS) * 100}%`
    
    const questionsIndex = Math.floor(Math.random() * availableQuestions.length)
    currentQuestion = availableQuestions[questionsIndex]
    question.innerText = currentQuestion.question

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion['choice' + number]
    })

    availableQuestions.splice(questionsIndex, 1)

    acceptingAnswers = true
}

choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if(!acceptingAnswers) return

        acceptingAnswers = false
        const selectedChoice = e.target
        const selectedAnswer = selectedChoice.dataset['number']

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect'

        if(classToApply === 'correct') {
            incrementScore(SCORE_POINTS)
        }

        selectedChoice.parentElement.classList.add(classToApply)

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply)
            getNewQuestion()

        }, 1000)
    })
})

incrementScore = num => {
    score +=num
    scoreText.innerText = score
}

startGame()