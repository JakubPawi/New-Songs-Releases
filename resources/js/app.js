require('./bootstrap');

var accessToken =[];
var wrapper =  $("#row");
var HTML ='';
var zdjecie;
var artysta;
var tytulpiosenki;
var artistinput;
var i = 10;
var tytulyzsearchquery = [];
var newone;


var artistid;

function newsongs(){
    $(document).ready(function(){
        $("#btn1").on("click",function() {
            artist = document.getElementById('artist').value;
            $.ajax({
                type:"GET",
                url:"token",
                dataType: "json",
                success: function(response){
                    $.ajax({
                        type:'GET',
                        url:'https://api.spotify.com/v1/search?q='+artist+'&type=artist&limit=1',
                        headers: {
                            'Authorization' : 'Bearer ' + response['token'][0]['token']
                        },
                        success:function(data){
                            artistid = data['artists']['items'][0]['id'];
                            $.ajax({
                                type:'GET',
                                url:'https://api.spotify.com/v1/artists/'+artistid+'/albums?include_groups=single',
                                headers: {
                                    'Authorization' : 'Bearer ' + response['token'][0]['token']
                                },
                                success: function(data1){
                                    console.log(lastsingle = data1['items'][0]['name']);
                                    console.log(data1);
                                    $.ajax({
                                        type:'GET',
                                        url:'https://api.spotify.com/v1/artists/'+artistid+'/albums',
                                        headers: {
                                            'Authorization' : 'Bearer ' + response['token'][0]['token']
                                        },
                                        success: function(data2) {
                                            console.log(data2);
                                            newone = data1['items'][0]['name'];
                                            console.log(newone);
                                            if(data1['items'][0]['release_day'] > data2['items'][0]['release_day']){
                                            HTML += '  <div class="col-3"> <div id="card" class="card m-3" style=" background-color:yellow;width: 18rem;"><img id="zdjecie" class="card-img-top" src="'+data1['items'][0]['images'][0]['url']+'" alt="Card image cap"> <div class="card-body"> <p id="artysta" class="card-text">'+data1['items'][0]['name']+'(album)'+'</p><p id="tytul" class="card-text">'+data1['items'][0]['artists'][0]['name']+'</p> </div></div></div>';
                                            }
                                            else{
                                                HTML += '  <div class="col-3"> <div id="card" class="card m-3" style=" background-color:yellow;width: 18rem;"><img id="zdjecie" class="card-img-top" src="'+data2['items'][0]['images'][0]['url']+'" alt="Card image cap"> <div class="card-body"> <p id="artysta" class="card-text">'+data2['items'][0]['name']+'(album)'+'</p><p id="tytul" class="card-text">'+data2['items'][0]['artists'][0]['name']+'</p> </div></div></div>';
                                            }
                                            wrapper.html(HTML);
                                        }
                                    })
                                }

                            })
                        }
                    });

                }
            })
        });
    })
}


function token(){
$(document).ready(function(){
    $("#btn1").on("click",function(){
        HTML = "";
        artistinput = document.getElementById('artist').value;
    $.ajax({
        type:"GET",
        url:"token",
        dataType: "json",
        success: function(response){
            accessToken.push(response['token'][0]['token']);
            
            $.ajax({
                url: 'https://api.spotify.com/v1/search?q='+artistinput+'&type=track&market=PL&limit='+i+'&offset=5',
                type: 'GET',
                async: false,
                headers: {
                    'Authorization' : 'Bearer ' + response['token'][0]['token']
                },
                success: function(data) {
                    for(let j=0;j<i;j++){
                        zdjecie = data['tracks']['items'][j]['album']['images'][0]['url'];
                        artysta = data['tracks']['items'][j]['artists'][0]['name'];
                        tytulpiosenki = data['tracks']['items'][j]['name'];
                        tytulyzsearchquery.push(tytulpiosenki);

                        if(artysta.toUpperCase() != artistinput.toUpperCase()){
                            i++;
                        }
                        else {
                            
                            if(tytulyzsearchquery.includes(newone)){
                                console.log("git")
                            }
                            else{
                                HTML += '  <div class="col-3"> <div id="card" class="card m-3" style="width: 18rem;"><img id="zdjecie" class="card-img-top" src="'+zdjecie+'" alt="Card image cap"> <div class="card-body"> <p id="artysta" class="card-text">'+artysta+'</p><p id="tytul" class="card-text">'+tytulpiosenki+'</p> </div></div></div>';
                                wrapper.html(HTML); 
                            }
                            
                        }         
                }                

                }
            }); 
                    }
                })
            })
        }) 
            }


newsongs()
token()

