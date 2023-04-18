<x-app-layout>
    <style>
        .contact-form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
        }

        .contact-form label {
            color: black;
        }

        .contact-form .heading {
            font-size: 24px;
            color: black;
            ;
            margin-bottom: 12px;
            font-weight: bold;
            display: block;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin-bottom: 10px;
        }

        textarea {
            resize: none;
            height: 80px;
            width: 200px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            box-shadow: 0 0 5px #ff6384;
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .contact-form button[type="submit"] {
            background-color: #ff6384;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .contact-form button[type="submit"]:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }

    </style>
    <div class="cont-about">
        <!-- VIDEO BACKGROUND  -->
        <section class="about-group-desktop">
            
            <div class="text-center">

                <img src="/images/signWithLogo.svg" alt="" class="logo-back m-auto">

                <h1>About Us</h1>

                <h2>Starting at 2023. We are dedicate with are aproved Blogger and Event Managers to let you know what you want to know about the EventLife</h2>

            </div>
            <div class="contact-form mb-5">
                <span class="heading">Contact Us</span>
                <form>
                    <label for="name">Name:</label>
                    <input type="text" required="">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required="">

                    <label for="title-message">Title:</label>
                    <input type="text" required="">

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required=""></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>

    </div>

    </div>


</x-app-layout>
