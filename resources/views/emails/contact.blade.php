<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Nuvana - Contact Us Query</title>
  <style>
    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      background-color: #f4f7f6;
      margin: 0;
      padding: 0;
    }

    .email-container {
      max-width: 600px;
      margin: 30px auto;
      background-color: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      border: 1px solid #e0e0e0;
    }

    .header {
      background-color: #1a365d;
      /* Dark blue professional theme */
      color: #ffffff;
      padding: 25px 20px;
      text-align: center;
    }

    .header h2 {
      margin: 0;
      font-size: 24px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .content {
      padding: 30px;
      color: #333333;
      line-height: 1.6;
      font-size: 15px;
    }

    .content p {
      margin: 0 0 15px;
    }

    .details-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 25px;
      margin-top: 15px;
    }

    .details-table th,
    .details-table td {
      padding: 14px 12px;
      border-bottom: 1px solid #eeeeee;
      text-align: left;
    }

    .details-table th {
      width: 35%;
      color: #666666;
      font-weight: 600;
      font-size: 14px;
      background-color: #fafafa;
    }

    .details-table td {
      color: #222222;
      font-weight: 500;
    }

    .details-table a {
      color: #1a365d;
      text-decoration: none;
    }

    .message-box {
      background-color: #f8fafc;
      border-left: 4px solid #1a365d;
      padding: 20px;
      margin-top: 10px;
      border-radius: 0 4px 4px 0;
      white-space: pre-wrap;
      color: #444444;
      font-style: italic;
    }

    .footer {
      background-color: #fcfcfc;
      padding: 20px;
      text-align: center;
      font-size: 13px;
      color: #888888;
      border-top: 1px solid #eeeeee;
    }
  </style>
</head>

<body>
  <div class="email-container">
    <div class="header">
      <h2>New Contact Inquiry</h2>
    </div>

    <div class="content">
      <p>Hello,</p>
      <p>You have received a new message from the <strong>Nuvana Scales</strong> contact form. Here are the details:</p>

      <table class="details-table">
        <tr>
          <th>Full Name</th>
          <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
          <th>Email Address</th>
          <td><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td>
        </tr>
        <tr>
          <th>Phone Number</th>
          <td>{{ $data['phone'] ?? 'Not provided' }}</td>
        </tr>
      </table>

      <p><strong>Message:</strong></p>
      <div class="message-box">{{ $data['message'] }}</div>
    </div>

    <div class="footer">
      <p>This email was automatically generated from your website contact form.</p>
    </div>
  </div>
</body>

</html>
