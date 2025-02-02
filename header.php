<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <style>
        /* Base styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .topnav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            padding: 0.5rem 2rem;
            position: sticky;
            top: 0;
            z-index: 50; /* Increased for better layering */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .sidenav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .topnav h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        .menu-items {
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .topnav a {
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .topnav a:hover {
            background-color: #cae5fa;
        }

        /* Dropdown menu styles */
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            min-width: 160px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #575757;
        }

        /* Mobile responsiveness */
        .hamburger {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .menu-items {
                display: none;
                flex-direction: column;
                gap: 5px;
                align-items: flex-start;
                width: 100%;
                background-color: white;
               
                position: absolute;
                top: 60px;
                left: 0;
                padding: 1rem 0;
            }

            .menu-items.active {
                display: flex;
            }

            .topnav {
                justify-content: space-between;
                background-color: white;
            }
            .sidenav {
                justify-content: space-between;
                
            }
            .sidenav svg{
               display: none;
            }

            .hamburger {
                display: block;
            }

            .middlenav a {
                padding: 1rem;
                text-align: left;
                width: 100%;
            }
            .dropdown {
                padding: 15px 0;
                
            }
            .middlenav a {
                padding: 1rem;
                text-align: left;
                width: 100%;
                border: none;
            }

            .dropdown-content {
                left: 0;
                right: 0;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>

    <div class="topnav">
        <div class="sidenav">
            <a href="index.php"><h1>SCBD Portal</h1></a>
            <div class="middlenav">
                <div class="menu-items" id="menuItems">
                    <a href="index.php">Home</a>
                    <div class="dropdown">
                        <a href="forms.php" class="dropbtn">Forms & Templates <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="forms.php">All Forms</a>
                            <a href="forms.php">Communications</a>
                            <a href="forms.php">BA Manual</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="dropbtn">IT Help Desk <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="it_requisition.php">IT Requisition</a>
                            <a href="#">Tutorials</a>
                            <a href="knowledge_sharing.php">IT Guidelines</a>
                        </div>
                    </div>
                    <a href="photo_gallery.php">Photo Gallery</a>
                    <a href="staff-list.php">Staff List</a>
                    <a href="vendor-list.php">Vendor List</a>
                </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="63.917" viewBox="0 0 250 63.917">
                <g id="Gruppe_655" data-name="Gruppe 655" transform="translate(11587.335 97.208)">
                    <path id="Pfad_2746" data-name="Pfad 2746"
                        d="M88.316,194.164c-2.908-.69-6.467-1.493-6.467-5.242,0-3.292,2.794-5.359,6.964-5.359,3.444,0,7.117,1.646,7.727,5.893l-3.289.421a3.2,3.2,0,0,0-1.3-2.906,5.611,5.611,0,0,0-3.484-1.073c-2.371,0-3.558,1.415-3.558,2.642,0,1.72,1.952,2.255,4.322,2.83l1.724.42c2.143.5,6.007,1.417,6.007,5.206,0,2.943-2.6,5.7-7.576,5.7A9.883,9.883,0,0,1,83.8,201.24a6.863,6.863,0,0,1-2.679-4.9l3.444-.537a4.1,4.1,0,0,0,1.338,3.521,5.32,5.32,0,0,0,3.635,1.033c2.678,0,4.247-1.033,4.247-2.984,0-2.067-1.569-2.45-3.748-2.872"
                        transform="translate(-11668.457 -235.985)" fill="#5a5f61" />
                    <path id="Pfad_2747" data-name="Pfad 2747"
                        d="M120.511,184.221l4.284,13.388,4.706-13.388h3.214L126.1,202.239h-2.677l-4.325-13.428-4.4,13.428H111.9l-6.275-18.018h3.29l4.516,13.388,4.438-13.388"
                        transform="translate(-11672.914 -236.105)" fill="#5a5f61" />
                    <rect id="Rechteck_125" data-name="Rechteck 125" width="2.947" height="3.522"
                        transform="translate(-11533.618 -61.186)" fill="#5a5f61" />
                    <rect id="Rechteck_126" data-name="Rechteck 126" width="2.947" height="18.017"
                        transform="translate(-11533.618 -51.884)" fill="#5a5f61" />
                    <path id="Pfad_2748" data-name="Pfad 2748"
                        d="M165.664,194.164c-2.909-.69-6.466-1.493-6.466-5.242,0-3.292,2.792-5.359,6.963-5.359,3.444,0,7.117,1.646,7.728,5.893l-3.289.421a3.2,3.2,0,0,0-1.3-2.906,5.61,5.61,0,0,0-3.484-1.073c-2.371,0-3.557,1.415-3.557,2.642,0,1.72,1.951,2.255,4.323,2.83l1.724.42c2.142.5,6.007,1.417,6.007,5.206,0,2.943-2.6,5.7-7.577,5.7a9.886,9.886,0,0,1-5.585-1.454,6.871,6.871,0,0,1-2.68-4.9l3.444-.537a4.1,4.1,0,0,0,1.338,3.521,5.323,5.323,0,0,0,3.637,1.033c2.677,0,4.246-1.033,4.246-2.984,0-2.067-1.569-2.45-3.75-2.872"
                        transform="translate(-11681.706 -235.985)" fill="#5a5f61" />
                    <path id="Pfad_2749" data-name="Pfad 2749"
                        d="M193.115,194.164c-2.908-.69-6.467-1.493-6.467-5.242,0-3.292,2.794-5.359,6.965-5.359,3.443,0,7.115,1.646,7.727,5.893l-3.29.421a3.2,3.2,0,0,0-1.3-2.906,5.611,5.611,0,0,0-3.483-1.073c-2.372,0-3.557,1.415-3.557,2.642,0,1.72,1.951,2.255,4.322,2.83l1.723.42c2.143.5,6.007,1.417,6.007,5.206,0,2.943-2.6,5.7-7.575,5.7a9.883,9.883,0,0,1-5.584-1.454,6.857,6.857,0,0,1-2.68-4.9l3.444-.537a4.1,4.1,0,0,0,1.339,3.521,5.314,5.314,0,0,0,3.633,1.033c2.679,0,4.247-1.033,4.247-2.984,0-2.067-1.568-2.45-3.749-2.872"
                        transform="translate(-11686.407 -235.985)" fill="#5a5f61" />
                    <path id="Pfad_2750" data-name="Pfad 2750"
                        d="M230.453,195.608a8.786,8.786,0,0,1-1.033,3.06c-1.493,2.755-4.054,3.982-7.383,3.982-6.619,0-8.993-4.938-8.993-9.376,0-5.125,2.719-9.755,8.726-9.755,2.907,0,7.154,1.032,8.338,6.045l-3.366.305a4.628,4.628,0,0,0-4.86-4.131c-5.242,0-5.469,5.7-5.469,7.307a8.9,8.9,0,0,0,1.184,4.86,5.012,5.012,0,0,0,4.478,2.409c4.4,0,4.9-3.6,5.089-5.012"
                        transform="translate(-11691.043 -235.977)" fill="#00477a" />
                    <path id="Pfad_2751" data-name="Pfad 2751"
                        d="M275.078,184.093v2.638a6.345,6.345,0,0,1,5.624-3.213,5.942,5.942,0,0,1,5.93,4.131,13.437,13.437,0,0,1,.307,3.713v10.749h-3.023V191.86a10.12,10.12,0,0,0-.191-2.984,3.823,3.823,0,0,0-3.864-2.487,4.643,4.643,0,0,0-3.443,1.378,4.991,4.991,0,0,0-1.34,4.054v10.292h-3.06V184.093"
                        transform="translate(-11701.161 -235.977)" fill="#00477a" />
                    <path id="Pfad_2752" data-name="Pfad 2752"
                        d="M303.7,182.953h3.288v2.526H303.7v10.327c0,2.144,0,3.061,1.3,3.061a7.684,7.684,0,0,0,1.989-.42v2.523a20.6,20.6,0,0,1-2.945.308c-3.517,0-3.517-1.721-3.48-4.093V185.48h-2.871v-2.526h2.871v-5.7H303.7"
                        transform="translate(-11705.614 -234.837)" fill="#00477a" />
                    <path id="Pfad_2753" data-name="Pfad 2753"
                        d="M361.725,195.608a8.81,8.81,0,0,1-1.034,3.06c-1.493,2.755-4.056,3.982-7.384,3.982-6.618,0-8.991-4.938-8.991-9.376,0-5.125,2.715-9.755,8.724-9.755,2.908,0,7.154,1.032,8.339,6.045l-3.365.305a4.627,4.627,0,0,0-4.86-4.131c-5.242,0-5.472,5.7-5.472,7.307a8.888,8.888,0,0,0,1.185,4.86,5.008,5.008,0,0,0,4.477,2.409c4.4,0,4.9-3.6,5.089-5.012"
                        transform="translate(-11713.331 -235.977)" fill="#00477a" />
                    <path id="Pfad_2754" data-name="Pfad 2754"
                        d="M377.682,182.953h3.29v2.526h-3.29v10.327c0,2.144,0,3.061,1.3,3.061a7.722,7.722,0,0,0,1.992-.42v2.523a20.7,20.7,0,0,1-2.947.308c-3.518,0-3.518-1.721-3.48-4.093V185.48h-2.872v-2.526h2.872v-5.7h3.137"
                        transform="translate(-11718.308 -234.837)" fill="#00477a" />
                    <path id="Pfad_2755" data-name="Pfad 2755"
                        d="M250.471,183.519c-7,0-8.992,5.7-8.992,9.719,0,4.743,2.641,9.412,8.876,9.412,5.513,0,8.761-4.1,8.8-9.566.039-4.935-2.713-9.565-8.683-9.565m5.357,9.565c-.042,1.836-.423,7.115-5.512,7.115-3.938,0-5.505-3.137-5.505-6.924,0-4.131,1.643-7.308,5.737-7.308,2.062,0,4.4,1.037,5.088,4.591A10.376,10.376,0,0,1,255.828,193.084Z"
                        transform="translate(-11695.909 -235.977)" fill="#00477a" />
                    <path id="Pfad_2756" data-name="Pfad 2756"
                        d="M332.493,199.588c-1.264,0-1.264-.881-1.3-2.6v-5.855c.036-2.409.036-4.476-1.953-6.082a9.028,9.028,0,0,0-5.278-1.532c-3.063,0-5.165,1.224-6.236,3.213a7.013,7.013,0,0,0-.727,2.717l3.214.19c0-.956,0-3.789,3.862-3.789,4.057,0,4.057,3.141,4.057,5.013v.461l-2.867.227c-5.4.423-7.31,1.647-8.344,3.176a4.925,4.925,0,0,0-.8,2.717c0,3.061,2.6,5.166,6.119,5.166a8.111,8.111,0,0,0,6.2-2.946,2.792,2.792,0,0,0,3.14,2.678,7.089,7.089,0,0,0,1.913-.307V199.4a2.6,2.6,0,0,1-.995.191m-4.82-2.257a4.931,4.931,0,0,1-4.783,2.716c-2.257,0-3.407-1.225-3.407-2.678,0-1.262.574-2.525,3.94-3.254,1.953-.421,3.56-.65,4.747-.841C328.17,195.917,328.131,196.335,327.673,197.331Z"
                        transform="translate(-11708.691 -235.977)" fill="#00477a" />
                    <path id="Pfad_2757" data-name="Pfad 2757"
                        d="M216.524,150.85c-19.507,0-30.551-4.224-30.551-10.428,0-6.709,12.742-10.666,34.191-10.666,4.806,0,9.1.231,17.678,1.008v1.486c-5.98-.427-9.75-.582-15.47-.582-15.08,0-30.538,3.245-30.538,8.367,0,5.042,15.325,7.289,31.447,7.289,4.292,0,10.66-.193,14.561-.427v3.029c-11.828.9-16.507.922-21.318.922"
                        transform="translate(-11686.21 -226.965)" fill="#00477a" />
                    <path id="Pfad_2758" data-name="Pfad 2758"
                        d="M239.619,138.271c19.505,0,30.548,4.224,30.548,10.428,0,6.708-12.74,10.665-34.186,10.665-4.809,0-9.1-.231-17.679-1.008v-1.486c5.98.426,9.749.582,15.47.582,15.08,0,30.537-3.245,30.537-8.368,0-5.041-15.322-7.289-31.447-7.289-4.292,0-10.66.194-14.56.427v-3.029c11.829-.9,16.506-.923,21.317-.923"
                        transform="translate(-11691.685 -228.514)" fill="#5a5f61" />
                    <rect id="Rechteck_127" data-name="Rechteck 127" width="250" height="63.916"
                        transform="translate(-11587.335 -97.208)" fill="none" />
                </g>
            </svg>

        </div>

        
        <div class="hamburger" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </div>