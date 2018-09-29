(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
			 	{
					clue: "First letter of greek alphabet",
					answer: "ccc",
					position: 1,
					orientation: "across",
					startx: 1,
					starty: 1
				},
			 	{
					clue: "Not a one ___ motor, but a three ___ motor",
					answer: "cc",
					position: 3,
					orientation: "across",
					startx: 1,
					starty: 1
				},
				{
					clue: "Created from a separation of charge",
					answer: "cccc",
					position: 2,
					orientation: "down",
					startx: 3,
					starty: 3
				},
				{
					clue: "The speeds of engines without and accelaration",
					answer: "cccc",
					position: 2,
					orientation: "across",
					startx: 3,
					starty: 3
				}
				
			] 
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	})
	
})(jQuery)
