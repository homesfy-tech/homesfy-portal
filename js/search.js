// if (window.location.hostname == 'homesfy.in') {
//     var basePath = 'http://homesfy.in';
// } else if (window.location.hostname == "35.154.76.18") {
// } else {
//     var basePath = 'http://localhost:4000';
// }
if (window.location.pathname == '/search') {
    var url = window.location.href.split('=')[1];
    $('#name').val(decodeURI(url));
}
var basePath = 'https://api.homesfy.in/api/search';

$(document).ready(function() {
    var queryUrl = window.location.href
    var querystring = queryUrl.split("?");
    if (querystring.length > 1) {
        var pairs = querystring[1].split("&");
        for (i in pairs) {
            var keyval = pairs[i].split("=");
            
            switch (keyval[0]) {
               case "bhk":
                    $('.filter_bhk_'+keyval[1]).addClass('text-success');
                    break;
               case "q":
                   // utm_medium = keyval[1];
                   $('#name').val(decodeURIComponent(keyval[1]).replace(/\+/g, ' '));
                   break;
               case "fromPrice":
                   $('.from_price').val(keyval[1])
                   break;
               case "toPrice":
                   // utm_content = keyval[1];
                   $('.to_price').val(keyval[1])
                   break;
           }               
        }
    }

    $('body').click(function() {
        $("#searchsuggestion").css("display", "none");
    });

    var suggestStart = 0;
    var suggestLength = 10;
    var firstEnter = 0;

    // $("#name").keydown(function(e) {
    $("#name").on('paste, keyup', function(e) {
        //         var k = e.keyCode;
        // console.log(k);

        // var searchData = $("#name").val();
        // // var re = /^[ A-Za-z0-9_@./#&+-]*$/
        // if ((47 < k && k < 57) || (64 < k && k < 90) || (97 < k && k < 122) && (k != 40) && (k != 13) && (k != 38)){
        // // if (re.test(searchData)) {
        // $(document).on("keypress", "#name", function(e){
        if (e.keyCode != 40 && e.keyCode != 38 && e.keyCode != 13) {
            firstEnter = 0;
            var searchData = $("#name").val();
            console.log(searchData,"word")
            if (searchData != '') {
                $("#searchsuggestion").css("display", "block");
                // console.log(resultData);
                $.ajax({
                    type: 'GET',
                    url: basePath + '/autocomplete?q=' + searchData,
                    success: function(result) {
                        var resultData = result.data;
                        htmlStr = htmlStrMake = htmlStrModel = htmlStrVehicle = htmlStrOther = '';
                        if (resultData.length > 0) {
                            $.each(resultData, function(key, value) {
                                var variant = '';
                                // htmlStrMake += "<li class='searchresult' data-id=" + value['title']['id'] + " data-type=" + value['_source']['type'] + ">" + value['_source']['name'] + "</li>";
                                htmlStrMake += '<li class="searchresult" value="' + value['title'] + '" data-type="' + value['title'] + '"><div>'+ value['title'] +'</div></li>';
                                // if (typeof value['_source']['variant_type'] != 'undefined') {
                                //     var variant = ", " + value['_source']['variant_type'];
                                // }

                                // if (value['_type'] == 'make') {
                                // } else if (value['_type'] == 'model') {
                                //     htmlStrModel += "<li class='searchresult' data-id=" + value['_source']['id'] + " data-type=" + value['_source']['type'] + ">" + value['_source']['name'] + "</li>";
                                // } else if (value['_type'] == 'vehicle') {
                                //     htmlStrVehicle += "<li class='searchresult' data-id=" + value['_source']['id'] + " data-type=" + value['_source']['type'] + ">" + value['_source']['name'] + "</li>";
                                // } else {
                                //     htmlStrOther += "<li class='searchresult' data-id=" + value['_source']['id'] + " data-type=" + value['_source']['type'] + ">" + value['_source']['name'] + ", <i>" + value['_source']['type'] + "</i></li>";
                                // }
                            });
                            /*htmlStrVehicle += "<div class='searchresult' data-searchdata='"+encodeURIComponent(JSON.stringify(value))+"' id="+value['_source']['id']+"><font color='blue'>"+value['_source']['name']+"</font>, <i>"+value['_type']+variant+"</i> </div>";*/
                            htmlStr += '<ul class="autocomplete_box">';
                            htmlStr += htmlStrMake;
                            // if (htmlStrMake != '') {
                            //     htmlStr += '<div class="tag-line">Make</div>';
                            // }
                            // if (htmlStrModel != '') {
                            //     htmlStr += '<div class="tag-line">Model</div>';
                            //     htmlStr += htmlStrModel;
                            // }
                            // if (htmlStrVehicle != '') {
                            //     htmlStr += '<div class="tag-line">Vehicle</div>';
                            //     htmlStr += htmlStrVehicle;
                            // }
                            // if (htmlStrOther != '') {
                            //     htmlStr += '<div class="tag-line">Parts</div>';
                            //     htmlStr += htmlStrOther;
                            // }
                            // htmlStr += '</ul>';

                            $("#searchsuggestion").html(htmlStr);
                        } else {
                            $("#searchsuggestion").html("No Data Found!!!");
                        }
                    },
                    failure: function() {
                        console.log('Error');
                    }
                });
            }
        } else if (e.keyCode == 13 && firstEnter == 0) {
            // let queryString = $('#name').val().toLowerCase();
            let queryString = $('#name').val();
            $('#name_hide').val(queryString);
            basePath = '/homesfy';
            route = '/list?q=';
            queryStr = queryString;
            window.location.href = basePath + route + queryString;

        } else {
            firstEnter = 1;
            // $('.searchresult').next('li').addClass('selected');

            if (e.keyCode == 40) {
                suggestStart++;
                if (suggestStart > suggestLength) {
                    suggestStart = 1;
                }
                $('#searchsuggestion li').removeClass('selected');
                $('#searchsuggestion li').eq(suggestStart - 1).addClass('selected');
                $('#name').val($('#searchsuggestion li').eq(suggestStart - 1).text());
                // $('#name').attr('data-id', $('#searchsuggestion li').eq(suggestStart - 1).attr('data-id'));
                $('#name').attr('data-type', $('#searchsuggestion li').eq(suggestStart - 1).attr('data-type'));
            }

            if (e.keyCode == 13) {
                // var dataId = $('#name').attr('data-id');
                var dataType = $('#name').attr('data-type');

                // if (dataId != 0 && dataType != 'oes' && dataType != 'oem') {
                //     alert("You Pressed Enter-- Data Id = " + dataId + " & Data Type = " + dataType);
                // }

                if (dataType != '') {
                    var url = '/homesfy' + '/list?q=' + dataType;
                    window.location.href = url;
                }

            }

            if (e.keyCode == 38) {
                suggestStart--;
                if (suggestStart == 0) { suggestStart = suggestLength; }
                $('#searchsuggestion li').removeClass('selected');
                $('#searchsuggestion li').eq(suggestStart - 1).addClass('selected');
                $('#name').val($('#searchsuggestion li').eq(suggestStart - 1).text());
                // $('#name').attr('data-id', $('#searchsuggestion li').eq(suggestStart - 1).attr('data-id'));
                $('#name').attr('data-type', $('#searchsuggestion li').eq(suggestStart - 1).attr('data-type'));
            }
        }
    });

    $(document).on('click', '.searchresult', function() {
        console.log("in the click function");
        // var clickDataType = $(this).attr('data-type').toLowerCase();
        let clickDataType = $(this).attr('data-type');
        // clickDataType = clickDataType.split(' ').join('-');
        console.log("in the click function",clickDataType);
        // var clickDataId = $(this).attr('data-id');

        if (clickDataType != '') {
            var url = '/homesfy' + '/list?q=' + clickDataType;
            window.location.href = url;
        }

    })
    // $(document).on('click', '.filter_clear', function() {
    //     $("input[type='checkbox']").each(function() {
    //         this.checked = false;
    //         $('.filter_clear').addClass('hide');
    //     });
    //     requestFilter();
    // });
    // $(document).on('click', '.js_filter', function() {
    //     let i = 0
    //     $.each($("input[type='checkbox']:checked"), function() {
    //         i = i + 1;
    //     });
    //     i > 0 ? $('.filter_clear').removeClass('hide') : $('.filter_clear').addClass('hide');
    //     requestFilter();
    // });

    $(document).on('click', '.search_button', function() {
        // let queryString = $('#name').val().toLowerCase();
        let queryString = $('#name').val();
        $('#name_hide').val(queryString);
        basePath = '/homesfy';
        route = '/list?q=';
        queryStr = queryString;
        window.location.href = basePath + route + queryString;
    })

    $(document).on('click', '.filter_bhk', function() {
        // let queryString = $('#name').val().toLowerCase();
        let URL = window.location;
        $('.filter_bhk').removeClass('text-success');
        $('.apply_filter').removeAttr('disabled');

        let queryString = $(this).val();
        $(this).addClass('text-success');

        // applyFiter(queryString);
    })

    $(document).on('change', '.price_range', function() {
        // let queryString = $('#name').val().toLowerCase();
        $('.apply_filter').removeAttr('disabled');
    })

    var url = new URL(window.location.href);

    $('.apply_filter').click(function(){

        var listItems = $(".filter_bhk");
        for (let li of listItems) {
            if($(li).hasClass('text-success')) { // check if li has active class
                var data = $(li).val();
              }
        }

        let from_price = $('.from_price :selected').val();
        let to_price = $('.to_price :selected').val();
        // console.log("====>",from_price, to_price);

        if(data != null && from_price > 0 && to_price >0 ){
            // filterData = {"bed_config" :this.state.bhk,"price":[{"from":this.state.from,"to":this.state.to}]};
            let URL = window.location.search;
            let current_url = window.location.href;
            console.log(current_url,"surajjjjj");
            var str2 = "bhk";
            if(URL.indexOf(str2) != -1){

                var search_params = url.searchParams;
                search_params.set('bhk', data);
                search_params.set('fromPrice', from_price);
                search_params.set('toPrice', to_price);
                url.search = search_params.toString();
                var new_url = url.toString();
                console.log(new_url,"==========>>");
                window.location.href = new_url;
            }else{
                window.location.href = current_url +"&bhk="+data+"&fromPrice="+from_price+"&toPrice="+to_price;
            }

        }else if(from_price >0 && to_price >0 ){
            console.log("only price");
            // filterData = {"price":[{"from":this.state.from,"to":this.state.to}]};
            let URL = window.location.search;
            console.log(URL,"surajjjjj");
            let current_url = window.location.href;
            var str2 = "from";
            if(URL.indexOf(str2) != -1){

                var search_params = url.searchParams;
                search_params.set('fromPrice', from_price);
                search_params.set('toPrice', to_price);
                url.search = search_params.toString();
                var new_url = url.toString();
                // console.log(new_url,"==========>>");
                window.location.href = new_url;
            }else{
                window.location.href = current_url +"&fromPrice="+from_price+"&toPrice="+to_price;
            }

        }else if(data != null){
            console.log("only bhk");
            // filterData = {"bed_config" :this.state.bhk};
            let URL = window.location.search;
            console.log(URL,"surajjjjj");
            let current_url = window.location.href;
            var str2 = "bhk";
            if(URL.indexOf(str2) != -1){

                var search_params = url.searchParams;
                search_params.set('bhk', data);
                url.search = search_params.toString();
                var new_url = url.toString();
                // console.log(new_url,"==========>>");
                window.location.href = new_url;
            }else{
                window.location.href = current_url +"&bhk="+data;
            }
        }
        
    })

    // $(document).on('click', '.apply_filter', function bhk(data) {

            // console.log(data);
        // if(this.state.bhk != null && this.state.from >0 && this.state.to >0 ){
        // filterData = {"bed_config" :this.state.bhk,"price":[{"from":this.state.from,"to":this.state.to}]};

        // }else if(this.state.from >0 && this.state.to >0 ){
        // filterData = {"price":[{"from":this.state.from,"to":this.state.to}]};

        // }else if(this.state.bhk != null){

        // }
        

    // });


});