<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Message from Contact Page</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">

        <!-- Logo Section -->
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="https://el-roiproperties.org" target="_blank" style="text-decoration: none;">
            <img src="https://el-roiproperties.org/assets/images/el_roi-logo.png" alt="Logo" style="max-width: 150px;">
        </a>
        </div>

        <!-- Header Section -->
        <h2 style="color: #333; text-align: center; border-bottom: 2px solid #f4f4f4; padding-bottom: 10px;">Message Received</h2>
        <p style="text-align: center; color: #555;">A new message has been submitted via <strong>{{ config('app.name') }}</strong> website contact form. Here are the details:</p>

        <!-- Details Table -->
        <table style="width: 100%; margin-top: 20px; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;"><strong>Name:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;">{{ $data['username'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;"><strong>Email:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;">{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;"><strong>Mobile:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;">{{ $data['phone'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;"><strong>Service Type:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #f4f4f4;">{{ $data['service'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><strong>Message:</strong></td>
                <td style="padding: 10px;">{{ $data['message'] }}</td>
            </tr>
        </table>

        <!-- Footer Section -->
        <p style="margin-top: 30px; text-align: center; color: #555;">Please respond to the request as soon as possible.</p>
        <p style="text-align: center; color: #aaa; font-size: 12px;">— Your Website Notification System<br><span>Powered by <a href="https://arkuzcreo.com" target='_blank'>ArkuzCreo</a></span> </p>
    </div>
</body>
</html>
