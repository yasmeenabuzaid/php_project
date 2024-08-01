<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomSizer Pro</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    header {
        display: flex;
        align-items: center;
        justify-content: center; 
        padding: 1rem 2rem;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: relative; 
    }

    .menu-icon {
        font-size: 1.5rem;
        cursor: pointer;
        position: absolute;
        left: 1rem; 
    }

    h1 {
        font-size: 1.75rem; 
        margin: 0;
        color: #007BFF; 
    }

    main {
        padding: 2rem;
    }

    .measurement-container {
        display: flex;
        align-items: stretch;
        gap: 1rem;
    }

    .measurement-details, .main-img {
        flex: 1;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .measurement-details {
        padding: 1rem;
        text-align: left;
    }

    .measurement-details h2 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #333;
    }

    .measurement-details table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1rem;
    }

    .measurement-details th, .measurement-details td {
        border: 1px solid #ddd;
        padding: 0.75rem;
        text-align: left;
    }

    .measurement-details th {
        background-color: #f2f2f2;
    }

    .main-img {
        width: 100%; /* Adjust to ensure it takes the full width of its container */
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }
    i{
        padding: 10px;
    
    }
    button{

        width: 50px;
        height: 50px;
        border-radius: 20px;
        border: 1px solid rgb(0, 0, 0);
        background-color: #007BFF;
        color: white;
        font-weight: 20px;
        font-size: 20px;
    }
    .btn{
        display: flex;
        background-color: #f7f7f7;
        padding: 20px;
    
       gap: 20px;
       
    }
</style>
<body>
   
    <main>
        <div class="measurement-container">
            <img src="../images/download.jpeg" alt="Main Image" class="main-img">
            <div class="measurement-details">
                <h2>Measurement Details</h2>
                <p>jndcjdnjnjncxz,la,lz;.</p>
                <table>
                    <tr>
                        <th>Number of rooms</th>
                        <td>Living Room</td>
                    </tr>
                    <tr>
                        <th>Width</th>
                        <td>15 ft</td>
                    </tr>
                    <tr>
                        <th>Length</th>
                        <td>20 ft</td>
                    </tr>
                    <tr>
                        <th>Room</th>
                        <td>Kitchen</td>
                    </tr>
                    <tr>
                        <th>Number of bathrooms</th>
                        <td>Bathroom</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>8 ft</td>
                    </tr>
                    <tr>
                        <th>Age of construction</th>
                        <td>10 ft</td>
                    </tr>
                    <tr>
                        <th>Owner's number</th>
                        <td>80 sq ft</td>
                    </tr>
                </table>
                <div class="btn">
                  <button><i class="fa-solid fa-phone"></i></button>
                  <button><i class="fa-solid fa-location-dot"></i></button>
                  <button><i class="fa-solid fa-paperclip"></i></button>
                  <button><i class="fa-solid fa-comment"></i></button>
                </div>
            </div>
        </div>
    </main>
    <?php include './include/image-slider.php'; ?>
    </body>
</html>
