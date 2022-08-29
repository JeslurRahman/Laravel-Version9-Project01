<!DOCTYPE html>
<html>
<head>
    <title>JR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#" >JR Products</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <div class="container">
        <div style="color: #f0200d; text-align:center;">
            <h2>Welcome to JR Products</h2>
        </div>
        <hr>
        <div style="color: #080808; text-align:center;">
            <p>Our Website allows people to buy and sell physical goods, services, and digital products over the internet rather than at a brick-and-mortar location. Through an JR product  website, a business can process orders, accept payments, manage shipping and logistics, and provide customer service.</p>
            <br>
            <p>A Privacy Policy is a legal agreement that details the personal information a website collects from visitors, and the ways in which that information is collected and managed. It is legally required by laws in California, the European Union, Canada and other jurisdictions around the world.

Protection of personal consumer information is the goal of privacy laws. Because more and more websites are collecting personal information to perform or improve online services, laws have been enacted to control and protect that information.

Your ecommerce store likely collects names and email addresses for customer registration, and address and payment details for transactions. But this is only the beginning.

Your store almost certainly interacts with third-party technologies such as Google Analytics, AdSense or a blog platform or live chat tool. Third party services such as these collect additional information from your online shoppers, such as IP addresses, locations, browsing activities and more.

All of this information is protected by privacy laws.

An effective Privacy Policy clearly spells out the types of data collected through your store, how it is collected, why it is collected, and how it's recorded, stored and deleted.

It also should provide contact information for the departments and individuals responsible for upholding your privacy procedures, as well as instructions for customers to access, modify or transfer their personal data.

Furthermore, it should give consumers a chance to change, edit or delete their own personal data, as well as the choice to opt out of sharing their data with you.</p>
        </div>

    </div>
</body>
</html>
