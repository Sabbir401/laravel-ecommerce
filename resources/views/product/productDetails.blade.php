<!doctype html>
<html lang="en">

<head>
    <title>Product Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .small-img-group {
            display: flex;
            justify-content: center;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        #img-area:hover {
            color: #448E51;
            box-shadow: 2px 2px 15px #448E51;
            transform: scale(1.03);
            cursor: zoom-in;
        }

        .small-img:hover {
            color: #448E51;
            box-shadow: 2px 2px 15px #448E51;
            transform: scale(1.03);
            border-radius: 5px;
            cursor: pointer;
        }

        #img-area {
            overflow: hidden;
        }

        h3 {
            font-weight: 600;
        }

        td {
            padding-bottom: 10px;
            font-size: 14px;
        }

        .paragraph{
            font-size: 14px;
            text-align: justify;
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-12 col-sm-12 ml-3">
                <div id="img-area">
                    <img id="MainImg" class="img-fluid w-100 mb-2 border rounded " src="{{ asset($product->product_image_1) }}" alt="">
                </div>
                <div class="small-img-group">
                    <div class="small-img-col m-1">
                        <img src="{{ asset($product->product_image_1) }}" width="100%" class="small-img border rounded" alt="">
                    </div>
                    <div class="small-img-col m-1">
                        <img src="{{ asset($product->product_image_2) }}" width="100%" class="small-img border rounded" alt="">
                    </div>
                    <!-- <div class="small-img-col">
                        <img src="{{ asset($product->product_image_3) }}" width="100%" class="small-img border rounded" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset($product->product_image_4) }}" width="100%" class="small-img border rounded" alt="">
                    </div> -->
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 ml-5">
                <h6></h6>
                <h3>{{ $product->productItems->SKU }}</h3>
                <h2></h2>

                <table>
                    <tr>
                        <td>Product Code</td>
                        <td>{{ $product->product_code }}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{ $product->category->parentCategory->category_name }}</td>
                    </tr>
                    <tr>
                        <td>Pack Size</td>
                        <td>{{ $product->productItems->productConfigur->variationOption->value }}</td>
                    </tr>
                    <tr>
                        <td>Format</td>
                        <td>{{ $product->category->category_name }}</td>
                    </tr>
                    <tr>
                        <td class="pr-5">Country Of Origin</td>
                        <td>{{ $product->country->country_name }}</td>
                    </tr>
                </table>
                <br>
                <h5>Description</h5>
                <div class="paragraph">
                    {!! $product->Description !!}
                </div>
            </div>
        </div>

    </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var ImgArea = document.getElementById('img-area');
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        ImgArea.addEventListener('mousemove', (e) => {
            const x = e.clientX - e.target.offsetLeft;
            const y = e.clientY - e.target.offsetLeft;

            console.log(x, y);

            MainImg.style.transformOrigin = `${x}px ${y}px`;
            MainImg.style.transform = "scale(1.5)"
        });

        ImgArea.addEventListener('mouseleave', () => {
            MainImg.style.transformOrigin = "center";
            MainImg.style.transform = "scale(1)"
        })



        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>

</html>
