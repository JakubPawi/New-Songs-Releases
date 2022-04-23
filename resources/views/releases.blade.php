<!-- //token spotify: BQCMkDWs2Oe57YLB6B2Imv3Ao71Y9-zZDWqtsHDhWPB_JaOYdcYjBFeJ4z0pDbNsTFtyu8Io9WGyZBElKbqZrUL1rq0_BQpSVN1mMugxDMaGnXdpokgXoYNTN9AXEK0-8F-JJM_tTLHy4YBIPlFd4EieKP94V8gcpZt8mp1iwes -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
    

</head>

<body style="background-color: black;" >
</br>
        <h1>
             <b>
             <span style="color: white; ">
                 <center>New Songs Response</center>
             </span>
            </b>
        </h1>
</br>


    <div class="container align-self-center">

        <div class="card mb-4" style="background-color: black;">

            <div class="card-body" >

                    <div class="row col-12 align-items-end justify-content-right ml-2 ">

                    </div>

                        <div class="row col-12">
                            
                        <div class="form-group col-5",>

                            <label>
                            <span style="color: white; ">
                                Wykonawca:
                            </span>
                            </label>

                            <input type="text" id="artist" class="form-control">

                        </div>



                        <div class="form-group col-2 row align-items-end justify-content-center pr-0">

                            <button class="btn btn-success"  id="btn1">
                                <i class="fas fa-search"></i>
                            </button>

                        </div>

                        

                       

                    </div>

                </form>
                <br>

            </div>
            
            <div  id="row" class="row">
            </div>
             

                @isset($art)
                    $art
                @endisset

            </div>

        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

    

</body>

</html>
