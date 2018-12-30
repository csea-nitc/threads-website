(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "Santa Claus and your browser love this (7)",
					answer: "XXXXOOO",
					position: 5,
					orientation: "across",
					startx: 10,
					starty: 4
				},
			 	{
					clue: " Richard Stallman is vegan in his software consumption (4, 6)",
					answer: "XXXXXXXXXX",
					position: 8,
					orientation: "across",
					startx: 4,
					starty: 6
				},
				


{
clue: '"Elon Musk believes AI will single us out in the future (11)"',
answer:'XXXXXXXXXXX',
position:10,
orientation:"across",
startx:4,
starty:13



}
,

{
					clue: "The two forces of version control (4, 3, 4)",
					answer: "XXXXXXXXXXX",
					position: 11,
					orientation: "across",
					startx: 3,
					starty: 15
				},
				{
					clue: "A way to boot a computer is what you call your ex (4)",
					answer: "XXXX",
					position: 15,
					orientation: "across",
					startx: 11,
					starty: 17
				}
,{
					clue: "If death could be a colour (4, 6)",
					answer: "XXXXXXXXXX",
						 
					position: 16,
					orientation: "across",	
					startx: 1,
					starty: 18
				}
				
				,
{
					clue: "Patterns of letters that help you remember assembly code (9)",
					answer: "XXXXXXXXX",
					position: 1,
					orientation: "down",
					startx: 7,
					starty: 1
				}
				,
{
					clue: "Two roads diverged in a project development wood (4)",
					answer: "cccc",
					position:2,
					orientation: "down",
					startx: 13,
					starty: 1
				},
{
					clue: "An organism that turns caffeine into software (10)",
					answer: "XXXXXXXXXX",
					position: 3,
					orientation: "down",
					startx: 11,
					starty: 2
				},

				{
					clue: "All you can do with lists (4)",
					answer: "XXXX",
					position: 4,
					orientation: "down",
					startx: 16,
					starty: 2
				},

{
					clue: "A thing you do with your long-time partner and your code (6)",
					answer: "XXXXXX",
					position: 6,
					orientation: "down",
					startx: 4,
					starty: 5
				},

{
					clue: "The three finger salute (7, 3, 6) ",
					answer: "XXXXXXXXXXXXXXXX",
					position: 7,
					orientation: "down",
					startx: 9,
					starty: 5
				},
{
					clue: "If your content can be edited in a form closely resembling the finished product, then... (7)",
					answer: "XXXXXXX",
					position: 9,
					orientation: "down",
					startx: 14,
					starty: 8
				},
/*
{
					clue: '"Terminal is too complicated, just give me everything in one GUI." ',
					answer: "ccc",
					position: 5,
					orientation: "down",
					startx: 6,
					starty: 7
				},*/
{
					clue: "Green dude likes froyos, eclairs and now Oreos (7)",
					answer: "XXXXXXX",
					position: 12,
					orientation: "down",
					startx: 7,
					starty: 15 	
				},

{
					clue: " It goes on and on and on and on (4)",
					answer: "XXXX",
					position: 13,
					orientation: "down",
					startx: 12,
					starty: 15

			},

{
					clue: "A red hat for your PC (6)",
					answer: "XXXXXX",
					position: 14,
					orientation: "down",
					startx: 4,
					starty: 17
				}
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
