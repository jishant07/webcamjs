<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>
    <div id="cam-screen"></div>
    <div class="images"></div>
    <form action="./add_images.php" method="POST">
        <input type="text" name="name" id="" placeholder="Enter name" required>
        <div class="image_data"></div>
        <button>Submit</button>
    </form>
    <button class="click_photo">Click to Capture</button>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js"></script>
<script>
    $(document).ready(() =>{
        Webcam.set({
            width: 300,
            height: 300,
            image_format: 'jpeg',
            jpeg_quality: 100
        })
        Webcam.attach('#cam-screen')

        function take_snapshot(){
            Webcam.snap(data_uri =>{
                $('.image_data').append("<input type='hidden' name=image[] value='"+data_uri+"'/>")
                $('.images').append("<img src='"+data_uri+"' alt='image here'/>");
                //Webcam.reset(); //Uncomment the function to the left for single image
            })
        }

        $('.click_photo').on("click", take_snapshot);
    })
</script>
</html>