// Array of quotes with associated image URLs
const quotes = [
  {
    text: "“The secret of getting ahead is getting started.”- Mark Twain",
    imageUrl: "images/1twain.jpg",
  },
  {
    text: "“The body achieves what the mind believes.”- Napoleon Hill",
    imageUrl: "images/1Hill.jpg",
  },
  {
    text: "“Push harder than yesterday if you want a different tomorrow.”- Vincent Williams sr",
    imageUrl: "images/1vincent.jpg",
  },
  {
    text: "“The real workout starts when you want to stop.”- Ronnie Coleman",
    imageUrl: "images/1ronnie.webp",
  },
  // Add more quotes and image URLs as needed
];

// Function to generate a random quote and update the page
function generateQuote() {
  const randomIndex = Math.floor(Math.random() * quotes.length);
  const quote = quotes[randomIndex];

  // Update the quote text
  const quoteTextElement = document.getElementById("quote-text");
  quoteTextElement.textContent = quote.text;

  // Update the quote image
  const quoteImageElement = document.getElementById("quote-image");
  quoteImageElement.src = quote.imageUrl;
}

// Add event listener to the button to generate a new quote on click
document.getElementById("new-quote-btn").addEventListener("click", generateQuote);

// Initial quote generation on page load
generateQuote();
