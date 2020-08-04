$(document).ready(function(){

	const frame1 = "https://www.videoask.com/f47lzwqld";
	const frame2 = "https://www.videoask.com/f8wyli04f";
    const min = 1;
    const max = 3;
    const rand =parseInt(min + Math.random() * (max - min));
	    // this.setState({ random: this.state.random + rand });

    console.log("rand",rand);
    if(rand ===1){
    	$('iframe').attr("src", frame1);
    }else{
    	$('iframe').attr("src", frame2);
    }

});