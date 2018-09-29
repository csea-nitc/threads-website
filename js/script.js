(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "Human:Eat::Computer:?",
					answer: "ccccc",
					position: 2,
					orientation: "across",
					startx: 16,
					starty: 2
				},
			 	{
					clue: "Touching the intangible is hard, where ever you are.",
					answer: "cccccccc",
					position: 4,
					orientation: "across",
					startx: 10,
					starty: 5
				},
				{
					clue: "When you don't need some lines of code but don't wish to remove them..",
					answer: "cccccc",
					position: 6,
					orientation: "across",
					startx: 14,
					starty: 7
				},
				{
					clue: "for i......: for j......: do something; ",
					answer: "cccccc",
					position: 7,
					orientation: "across",
					startx: 5,
					starty: 9
				}
,{
					clue: " One of the several species of fishes of the genus Salvelinus. Also a data type.",
					answer: "cccc",
					position: 10,
					orientation: "across",
					startx: 10,
					starty: 11
				}
				
				,
{
					clue: "How to get out of while(1) ",
					answer: "ccccc",
					position: 12,
					orientation: "across",
					startx: 7,
					starty: 14
				}
				,
{
					clue: "... << 'This isn't left shift' 	 ",
					answer: "cccc",
					position: 14,
					orientation: "across",
					startx: 4,
					starty: 16
				},
{
					clue: "... and then define.",
					answer: "ccccccc",
					position: 15,
					orientation: "across",
					startx: 1,
					starty: 18
				},

				{
					clue: "There are 10 types of people in the world...",
					answer: "cccccc",
					position: 1,
					orientation: "down",
					startx: 12,
					starty: 1
				},

{
					clue: "In short, plus plus.",
					answer: "cccccccccc",
					position: 2,
					orientation: "down",
					startx: 16,
					starty: 2
				},

{
					clue: "Procedure is key to do work. 12 tribes on your keyboard.",
					answer: "ccccccccc",
					position: 3,
					orientation: "down",
					startx: 8,
					starty: 5
				},
{
					clue: "3499 = DAB (on them)",
					answer: "ccccccccccc",
					position: 4,
					orientation: "down",
					startx: 10,
					starty: 5
				},

{
					clue: '"Terminal is too complicated, just give me everything in one GUI." ',
					answer: "ccc",
					position: 5,
					orientation: "down",
					startx: 6,
					starty: 7
				},
{
					clue: "4 bytes is one...",
					answer: "cccc",
					position: 8,
					orientation: "down",
					startx: 13,
					starty: 9 	
				},

{
					clue: "All nodes say 'Hi' to each other ",
					answer: "ccccccc",
					position: 9,
					orientation: "down",
					startx: 16,
					starty: 9

			},

{
					clue: "\"Can't get out of this block because I'm a ...\"",
					answer: "cccc",
					position: 8,
					orientation: "down",
					startx: 4,
					starty: 14
				},

{
					clue: " Atoms to the data.(Suarez, not again.) ",
					answer: "ccc",
					position: 12,
					orientation: "down",
					startx: 7,
					starty: 14
				},

{
					clue: "Don't forget to return 0 in the end. ",
					answer: "cccc",
					position: 13,
					orientation: "down",
					startx: 2,
					starty: 16
				}
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
