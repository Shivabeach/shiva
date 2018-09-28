(function() {
	function temperatureConverter(valNum) {
		valNum = parseFloat(valNum);
		document.getElementById("outputFahrenheit").innerHTML = (valNum * 1.8) + 32;
	}
	var cnt = 0;

	function countMe() {
		cnt = parseInt(cnt) + parseInt(1);
		var divData = document.getElementById("showCount");
		divData.innerHTML = "Clicks: (" + cnt + ")";
	}

})();