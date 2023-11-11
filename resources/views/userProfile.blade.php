<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        table tr th{
            margin-right: 5%;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1 class="text-center mt-3">Profile Information</h1>
        <div class="row mt-5">
            <div class="col-lg-4">
                <img src="{{url('/assets/img/download.png')}}" alt="" style="width:100%; height:100%">
            </div>
            <div class="col-lg-8 mt-5">
                <div class="row">
                    <div class="col-lg-3 mb-3">Name</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->name }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3">Email</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->email }}</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 mb-3">Phone Number</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->Phone_number }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3">Unit/App. Number</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->userAddress->address->unit_number }}</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 mb-3">Street Address</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->userAddress->address->street_number }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3">Address Line</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->userAddress->address->address_line1 }}</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 mb-3">City</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->userAddress->address->city }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3">Region</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->userAddress->address->region }}</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 mb-3">Postal Code</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->userAddress->address->post_code }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-3">Country</div>
                    <div class="col-lg-1 mb-3">:</div>
                    <div class="col-lg-7 mb-3">{{ $siteUserData->userAddress->address->findCountry->country_name }}</div>
                </div>



            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
