<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        :root {
            --primary-color: #58fd2b;
            --primary-hover: #32cfaa;
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --text-color: #f8fafc;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: var(--card-bg);
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 450px;
            box-sizing: border-box;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 1.75rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        input, textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #334155;
            border-radius: 0.55rem;
            background-color: #0f172a;
            color: var(--text-color);
            font-size: 1rem;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus, textarea:focus {
            border-color: var(--primary-color);
        }

        textarea {
            resize: vertical;
            height: 120px;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 0.55rem;
            background-color: var(--primary-color);
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: var(--primary-hover);
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Contact Us</h2>
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="name">ชื่อ-นามสกุล</label>
                <input type="text" id="name" name="name" required placeholder="กรอกชื่อของคุณ">
            </div>
            
            <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="email" id="email" name="email" required placeholder="example@email.com">
            </div>
            
            <div class="form-group">
                <label for="message">ข้อความ</label>
                <textarea id="message" name="message" required placeholder="พิมพ์ข้อความของคุณที่นี่..."></textarea>
            </div>
            
            <button type="submit">ส่งข้อมูล</button>
        </form>
    </div>

</body>
</html>