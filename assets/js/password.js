/** @format */

// from https://www.youtube.com/watch?v=iKo9pDKKHnc Web Dev Simplified

'use strict';
const characterAmountRange = document.getElementById('characterAmountRange');
const characterAmountNumber = document.getElementById('characterAmountNumber');
const includeUppercaseElement = document.getElementById('includeUppercase');
const includeNumbersElement = document.getElementById('includeNumbers');
const includeSymbolsElement = document.getElementById('includeSymbols');
const form = document.getElementById('passwordGeneratorForm');
const passwordDisplay = document.getElementById('passwordDisplay');

const LOWERCASE_CHAR_CODES = arrayFromLowToHigh(97, 122);
const UPPERCASE_CHAR_CODES = arrayFromLowToHigh(65, 90);
const NUMBER_CHAR_CODES = arrayFromLowToHigh(48, 57);
const SYMBOL_CHAR_CODES = arrayFromLowToHigh(33, 47)
	.concat(arrayFromLowToHigh(58, 64))
	.concat(arrayFromLowToHigh(91, 96))
	.concat(arrayFromLowToHigh(123, 126));

characterAmountNumber.addEventListener('input', SyncCharacterAmount);
characterAmountRange.addEventListener('input', SyncCharacterAmount);

form.addEventListener('submit', (e) => {
	'use strict';
	e.preventDefault();
	const characterAmount = characterAmountNumber.value;
	const includeUppercase = includeUppercaseElement.checked;
	const includeNumbers = includeNumbersElement.checked;
	const includeSymbols = includeSymbolsElement.checked;
	const password = generatePassword(
		characterAmount,
		includeUppercase,
		includeNumbers,
		includeSymbols
	);
	passwordDisplay.innerText = password;
});

function generatePassword(
	characterAmount,
	includeUppercase,
	includeNumbers,
	includeSymbols
) {
	let charCodes = LOWERCASE_CHAR_CODES;
	if (includeUppercase) charCodes = charCodes.concat(UPPERCASE_CHAR_CODES);
	if (includeSymbols) charCodes = charCodes.concat(SYMBOL_CHAR_CODES);
	if (includeNumbers) charCodes = charCodes.concat(NUMBER_CHAR_CODES);

	const passwordCharacters = [];
	for (let i = 0; i < characterAmount; i++) {
		const characterCode =
			charCodes[Math.floor(Math.random() * charCodes.length)];
		passwordCharacters.push(String.fromCharCode(characterCode));
	}
	return passwordCharacters.join('');
}

function arrayFromLowToHigh(low, high) {
	'use strict';
	const array = [];
	for (let i = low; i <= high; i++) {
		array.push(i);
	}
	return array;
}

function SyncCharacterAmount(e) {
	'use strict';
	const value = e.target.value;
	characterAmountNumber.value = value;
	characterAmountRange.value = value;
}
$('#pass').keyup(function(e) {
	var strongRegex = new RegExp(
		'^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$',
		'g'
	);
	var mediumRegex = new RegExp(
		'^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$',
		'g'
	);
	var enoughRegex = new RegExp('(?=.{6,}).*', 'g');
	if (false == enoughRegex.test($(this).val())) {
		$('#passstrength').html('More Characters');
	} else if (strongRegex.test($(this).val())) {
		$('#passstrength').className = 'ok';
		$('#passstrength').html('Strong!');
	} else if (mediumRegex.test($(this).val())) {
		$('#passstrength').className = 'alert';
		$('#passstrength').html('Medium!');
	} else {
		$('#passstrength').className = 'error';
		$('#passstrength').html('Weak!');
	}
	return true;
});
// const pass = document.getElementById('pass');
// const passstrength = document.getElementById('passstrength');
// pass.addEventListener('keyup', (e) => {
// 	let reg = e.target.value;
// 	console.log(reg);
// 	const strongRegex = new RegExp(
// 		/(?=.{13,25})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$/
// 	);
// 	const mediumRegex = new RegExp(
// 		/(?=.{7,12})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$/
// 	);
// 	const enoughRegex = new RegExp(/.{5,6}/);

// 	if (enoughRegex.test(reg)) {
// 		passstrength.innerHTML = 'More Characters';
// 	} else if (strongRegex.test(reg)) {
// 		passstrength.innerHTML = 'Strong!';
// 	} else if (mediumRegex.test(reg)) {
// 		passstrength.innerHTML = 'Medium!';
// 	} else {
// 		passstrength.innerHTML = 'Weak!';
// 	}
// 	return true;
// });
///(?=.{10,25})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$/
///
