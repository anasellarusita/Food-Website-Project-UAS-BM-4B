<!DOCTYPE html>
<html lang="en">
<head>
    <title>Food Website</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/logo.png" alt="Logo">
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Menu">Menu</a></li>
            </ul>

            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="menuSearch" placeholder="Search for menus...">
            </div>

        </nav>

        <!-- Main Section -->
        <div class="main">
            <div class="men_text">
                <h1>Blush by <span>Jeanna</span></h1>
            </div>

            <div class="main_image">
                <img src="image/main_img.png" alt="Main Image">
            </div>
        </div>

        <p>
            "Blush by Jeanna" is a name that embodies warmth, creativity, and personal connection,
            <span id="intro-dots">...</span>
            <span id="intro-more" style="display: none;">
                blending the culinary passions of Jeanetta and Anasella into a single heartfelt identity.
                "Blush" represents the joy, excitement, and vibrant emotions that come with cooking and sharing meals,
                much like the rosy glow of happiness when savoring a delicious dish.
                As a fusion of two names, Jeanna symbolizes unity, collaboration, and the shared love for food,
                making this website not just a collection of recipes but a celebration of flavors, stories,
                and the personal touch behind every creation.
            </span>
        </p>
        <p>
            <button id="intro-btn"
            onclick="toggleReadMore('intro')"
            style="background: none; color: deeppink; border: none; padding: 0; cursor: pointer; text-decoration: underline;">
            Read more
            </button>
        </p>
            
        <div class="main_btn">
            <a href="#Menu">Our Recipes</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>  
    

    </section>

    <!-- About -->
    <div class="about" id="About">
        <div class="about_main">
            <div class="image">
                <img src="image/Food_Plate.png" alt="About Us">
            </div>

            <div class="about_text">
                <h1><span>Background</span> Us</h1>
                <h3>Why did We Choose This Topic?</h3>
                <!-- Background Ringkas -->
                <div>
                    <p id="bg-short">
                        We choose this topic out of our passion for the culinary world and our ongoing adventure in creating delicious dishes
                        <span id="bg-dots">...</span>
                        <span id="bg-more" style="display: none;">
                        at home. 
                        However, we often find ourselves forgetting or misplacing our favorite recipes. That’s why we created this website! 
                        – to provide easy access to every beloved recipe, ensuring that you never have to worry about missing ingredients 
                        or steps while whipping up your next favorite meal or drink. Reignite your passion for cooking with ease and confidence!
                        </span>
                    </p>
                    <button onclick="toggleReadMore('bg')" style="background: none; color: deeppink; border: none; padding: 0; cursor: pointer; text-decoration: underline;">Read more</button>
                </div>
            </div>
        </div>
        <div class="about_btn">
            <a href="#Menu">Our Recipes</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>

    <!-- Menu -->
    <div class="menu" id="Menu">
        <h1>Our<span>Recipes</span></h1>
        <hr>

        <!-- Main Course Carousel -->
        <div class="carousel" id="MainCourseCarousel">
            <h1>MAIN COURSE</h1>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/ayambakar.jpg" alt="Roasted Chicken">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Grilled Chicken</h2>
                            <a href="#MainCourseCarousel" class="btn openModal" data-modal="recipeModal1">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/springroll.jpg" alt="Vietnamese Spring Roll">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Vietnamese Spring Roll</h2>
                            <a href="#MainCourseCarousel" class="btn openModal" data-modal="recipeModal2">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/sei_sapi.jpg" alt="Beef Se'i">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Beef Se'i</h2>
                            <a href="#MainCourseCarousel" class="btn openModal" data-modal="recipeModal3">Click for Recipe</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/spaghetti.jpg" alt="Spaghetti">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Spaghetti</h2>
                            <a href="#MainCourseCarousel" class="btn openModal" data-modal="recipeModal4">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/fish_and_chips.jpg" alt="Fish & Chips">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Fish & Chips</h2>
                            <a href="#MainCourseCarousel" class="btn openModal" data-modal="recipeModal5">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/nasi_goreng.jpg" alt="Nasi Goreng">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Nasi Goreng</h2>
                            <a href="#MainCourseCarousel" class="btn openModal" data-modal="recipeModal6">Click for Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-button prev" onclick="moveSlide('MainCourse', -1)">&#10094;</button>
            <button class="carousel-button next" onclick="moveSlide('MainCourse', 1)">&#10095;</button>
        </div>

        <div id="recipeModal1" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/oWXlmAeqoUE" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            
                <h2>Grilled Chicken Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>Chicken fillets - 4 nos. (weighing around 100 gms each)</li>
                    <li>Salt- 1 tsp</li> 
                    <li>Crushed Pepper- 1.5 tsp</li>
                    <li>Honey- 3 tsp</li>
                    <li>Soy sauce - 1 tsp</li>
                    <li>Butter - 2 dollops/ tsp</li>
                    <li>Olive Oil- 3 tsp (preferable but can also use refined white oil)</li>
                    <li>Crushed whole garlic with skin- 6 big pods</li> 
                </ul>
                <br>
                <p><strong>Preparation:</strong></p>
                <ol type="1">
                    <li>Keep the chicken fillets in a mixing bowl.</li> 
                    <li>Sprinkle salt & crushed pepper evenly. Pour the olive oil over it & add the crushed garlic.</li> 
                    <li>Mix everything well to coat evenly. (Alternatively you can add garlic powder or finely chopped garlic too.)</li> 
                    <li>Set aside for around 30 mins.</li>
                    <li>To prepare the honey-soy glaze, mix 1 tsp of soy sauce & 3 tsp of honey in a bowl. Mix well & keep aside for glaze to be used later.</li>
                    <li>For boiling vegetables, take a saucepan & boil water.</li> 
                    <li>Once it comes to a boil, add salt, mix well & add all the vegetables.</li>
                    <li>Boil the vegetables on high for around 5 mins. Should still be little crunchy.</li>
                    <li>Strain & wash it with cold water to retain the color & stop the cooking.</li>
                </ol>  
                <br>
                <ol type="1"><p><strong>Instructions:</strong></p>
                    <li>Take a grill pan & add a dollop (1 tsp) of butter. Spread it evenly.</li>
                    <li>Once hot, add the chicken fillets one beside the other. Grill on high heat for around 3 mins.</li>
                    <li>Turn them on the other side & continue to grill for 3 more mins on the other side.</li>
                    <li>Lower heat to medium & keep pressing the chicken pieces with the spatula for the chicken to cook & get the grill marks.</li>
                    <li>Turn it on the other side & repeat.</li> 
                    <li>Check if the chicken is cooked.</li>
                    <li>Now take a basting brush & brush the chicken pieces with the honey-soy glaze.</li>
                    <li>Turn the fillets on the other side.</li>
                    <li>Again brush the other side with the honey-soy glaze & turn it over. The color should be evenly browned.</li>
                    <li>Grill both sides for 1 min each or less. Take care that the honey-soy glaze does not burn.</li>
                    <li>Remove onto a plate.</li>
                    <li>To sauté the vegetables, take another pan & add a dollop/tsp of butter. Spread it and once hot add the boiled vegetables. Sauté on high for 2 mins, sprinkle some salt & crushed pepper. Mix & sauté for 2 mins.</li>
                    <li>Serve the grilled chicken with a side of the veggies.  .</li>  
                </ol>
            </div>
        </div>
        <div id="recipeModal2" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/eqU_QbokZMY" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                </iframe>
                <h2>Vietnamese Spring Roll Recipe</h2>
                <hr>
                <p><strong>Spring Rolls Ingredients:</strong></p>
                <ul>
                    <li>8 rice paper wrappers</li>
                    <li>100g rice vermicelli noodles, cooked</li>
                    <li>200g shrimp, cooked and sliced in half</li>
                    <li>1 small carrot, julienned</li>
                    <li>1 cucumber, julienned</li>
                    <li>1/2 cup lettuce or cabbage, shredded</li>
                    <li>1/4 cup fresh mint leaves</li>
                    <li>1/4 cup fresh cilantro</li>
                    <li>1/4 cup fresh Thai basil (optional)</li>
                </ul>
                <br>
                <p><strong>Peanut Sauce Ingredients:</strong></p>
                <ul>
                    <li>1/2 cup peanut butter</li>
                    <li>2 tbsp hoisin sauce</li>
                    <li>1 tbsp soy sauce</li>
                    <li>1 tbsp lime juice</li>
                    <li>1 tsp sesame oil</li>
                    <li>1 clove garlic, minced</li>
                    <li>1/2 cup warm water (adjust for desired consistency)</li>
                    <li>Crushed peanuts (for garnish)</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Fill a large shallow dish with warm water. Dip one rice paper wrapper into the water for about 5-10 seconds until soft.</li>
                    <li>Lay the softened rice paper on a clean surface.</li>
                    <li>Place a small amount of vermicelli noodles, lettuce, carrot, cucumber, mint, cilantro, and basil in the center.</li>
                    <li>Lay 3-4 shrimp halves in front of the vegetables.</li>
                    <li>Fold the sides of the rice paper inward, then tightly roll it up from the bottom, enclosing the filling.</li>
                    <li>Repeat with the remaining ingredients.</li>
                    <li>Serve the spring rolls fresh with peanut sauce on the side.</li>
                </ol>
            </div>
        </div>
        <div id="recipeModal3" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/ZxrD5y89sHc" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                </iframe>
                <h2>Beef Se'i Recipe</h2>
                <hr>
                <p><strong>Beef Ingredients:</strong></p>
                <ul>
                    <li>2 tbsp cooking oil</li>  
                    <li>5 cloves garlic, minced</li>  
                    <li>500 g ready-to-use beef se’i, thinly sliced</li>  
                    <li>1 tsp salt</li>  
                </ul>
                <br>
                <p><strong>Sambal Luat (Spicy Herb Chili Sauce) Ingredients:</strong></p>
                <ul>
                    <li>1 kaffir lime (use the zest and juice)</li>  
                    <li>20 red bird’s eye chilies</li>  
                    <li>½ tsp salt</li>  
                    <li>1 tsp shrimp paste (terasi), toasted</li>  
                    <li>5 shallots, thinly sliced</li>  
                    <li>2 tbsp basil leaves, thinly sliced</li>  
                    <li>3 stalks coriander leaves, thinly sliced</li>  
                    <li>1 tomato, diced into 1 cm cubes</li>  
                    <li>1 tsp sugar</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>To make sambal luat, grate the kaffir lime peel and squeeze the juice. Set aside.</li>  
                    <li>In a mortar and pestle, coarsely grind the chilies, grated kaffir lime peel, salt, and shrimp paste.</li>  
                    <li>Add the sliced shallots, basil leaves, coriander leaves, diced tomato, sugar, and kaffir lime juice. Mix well. Set aside.</li>  
                    <li>Heat the cooking oil in a pan, sauté the minced garlic until fragrant.</li>  
                    <li>Add the sliced beef se’i and salt. Stir well until heated through. Remove from heat.</li>  
                    <li>Serve the cooked beef se’i immediately with steamed rice and Sambal Luat on the side.</li>
                </ol>
            </div>
        </div>    
    
        <div id="recipeModal4" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/JmkbdAaUg7Q" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                </iframe>
                <h2>Spaghetti Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>Cooking oil</li>  
                    <li>1 chicken breast, cut into cubes</li>  
                    <li>1 onion, chopped</li>  
                    <li>3 cloves garlic, chopped</li>  
                    <li>2 tbsp tomato paste</li>  
                    <li>2 cups tomato puree</li>  
                    <li>1 tsp thyme powder</li>  
                    <li>1 tsp paprika</li>  
                    <li>½ tsp turmeric</li>  
                    <li>Salt, to taste</li>  
                    <li>Black pepper, to taste</li>  
                    <li>½ tsp sugar (optional, to balance the flavor)<li>  
                    <li>Hot water (as needed)</li>  
                    <li>1 packet of spaghetti</li>  
                    <li>Fresh cilantro, for garnish</li>  
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Heat a little oil in a pot over medium heat.</li>  
                    <li>Add the cubed chicken breast and sear until golden brown. Move aside</li>  
                    <li>Add the chopped onion and cook until softened.</li>  
                    <li>Add the chopped garlic and stir for a minute until fragrant.</li>  
                    <li>Add the tomato paste and cook for another minute.</li>  
                    <li>Pour in the tomato puree and stir well.</li>  
                    <li>Season with thyme, paprika, turmeric, black pepper, salt, and sugar.</li>  
                    <li>Add a little hot water if needed to adjust the consistency.</li>  
                    <li>Cover the pot and let it simmer gently for about 30 minutes, stirring occasionally.</li>
                    <li>Meanwhile, bring a separate pot of water to a boil.</li>  
                    <li>Add 1 tablespoon of salt and cook the spaghetti for about 10 minutes or until al dente.</li>  
                    <li>Drain the spaghetti.</li>
                    <li>Combine all the ready ingredients. First, add the cooked spaghetti directly into the pot with the chicken sauce.</li>  
                    <li>Mix everything together until the pasta is fully coated in the sauce.</li>  
                    <li>Serve hot, garnished with fresh cilantro.</li>
                </ol>
            </div>
        </div>
        
        <div id="recipeModal5" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/CYEFR_kg6Us" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                </iframe>
                <h2>Fish and Chips Recipe</h2>
                <hr>
                <p><strong>Fish Ingredients:</strong></p>
                <ul>
                    <li>500 g white fish fillets (cod, dory, or haddock)</li>  
                    <li>Salt & black pepper</li>  
                    <li>1 cup all-purpose flour (for coating)</li>
                </ul>
                <br>  
                <p><strong>Batter Ingredients:</strong></p>      
                <ul>
                    <li>1 cup all-purpose flour</li>  
                    <li>1 tsp baking powder</li>  
                    <li>1 tsp salt</li>  
                    <li>1 cup cold sparkling water (or cold beer for beer batter)</li>  
                    <li>Ice cubes (to keep batter cold)</li>
                </ul>  
                <br>
                <p><strong>Chips (Fries) Ingredients:</strong></p>         
                <ul>
                    <li>3-4 large potatoes</li>  
                    <li>Salt, to taste</li>  
                    <li>Oil for deep frying</li>
                </ul>  
                <br>
                <p><strong>Tartar Sauce Ingredients (Optional):</strong></p>
                <ul>
                    <li>4 tbsp mayonnaise</li>  
                    <li>1 tbsp chopped pickles</li>  
                    <li>1 tsp lemon juice</li>  
                    <li>Salt & pepper</li>  
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Let's prepare the chips. Peel and cut the potatoes into thick fries.</li>  
                    <li>Soak in cold water for 30 minutes (removes excess starch).</li>  
                    <li>Drain and pat dry.</li>  
                    <li>Heat oil in a deep pan.</li>  
                    <li>Fry the potatoes for the first time (at 150°C) for about 5 minutes until soft but not colored.</li>  
                    <li>Remove and drain.</li>  
                    <li>For the second fry, increase the oil temperature (to 190°C) and fry until golden and crispy.</li>  
                    <li>Drain and season with salt.</li>
                    <li>Prepare the Fish by seasoning the fish fillets with salt and pepper.</li>  
                    <li>Lightly coat the fish with flour (helps batter stick).</li>  
                    <li>In a bowl, mix flour, baking powder, and salt.</li>  
                    <li>Gradually add cold sparkling water while stirring until smooth and thick.</li>  
                    <li>Keep the batter cold over ice if possible.</li>  
                    <li>Now fry the fish. Dip the fish fillets into the batter, coat well, then fry in hot oil (180°C) until golden and crispy (about 4-5 minutes).</li>  
                    <li>Drain on paper towels.</li>  
                    <li>Serve the crispy fish with hot chips on the side.</li>  
                    <li>Add tartar sauce, lemon wedges, or malt vinegar for extra flavor.</li>
                </ol>
            </div>
        </div>
        
        <div id="recipeModal6" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/SG6itbjUCuA" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                </iframe>
                <h2>Nasi Goreng Recipe</h2>
                <hr>
                <p><strong>Ingredients (for 2 servings):</strong></p>
                <ul>
                    <li>2 plates of cooked white rice (preferably cold, leftover rice)</li>  
                    <li>2 cloves garlic, minced</li>  
                    <li>3 shallots, sliced</li>  
                    <li>1 egg</li>  
                    <li>2 tbsp sweet soy sauce</li>  
                    <li>1 tbsp soy sauce</li>  
                    <li>1 tsp oyster sauce (optional)</li>  
                    <li>Salt & pepper, to taste</li>  
                    <li>1 spring onion, sliced</li>  
                    <li>2 tbsp cooking oil</li>  
                    <li>Chicken, shrimp, sausage, or meatballs (sliced, optional)</li>  
                    <li>Vegetables: carrots, peas, cabbage (optional)</li>  
                </ul>
                <br>
                <p><strong>Garnish (Optional but recommended):</strong></p>
                <ul>
                    <li>Fried egg (sunny side up)</li>  
                    <li>Fried shallots</li>  
                    <li>Sliced cucumber & tomatoes</li>  
                    <li>Crackers (kerupuk)</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Break up the cold rice so it’s not clumpy.</li>
                    <li>Heat oil in a pan or wok over medium heat.</li>  
                    <li>Sauté garlic and shallots until fragrant.</li>  
                    <li>Add your protein (chicken, shrimp, sausage) and cook until done.</li>  
                    <li>Push the stir-fried mixture to the side, crack in 1 egg, and scramble it until set.</li>  
                    <li>Add the rice to the pan. Stir well to combine.</li>  
                    <li>Season with sweet soy sauce, regular soy sauce, oyster sauce (if using), salt, and pepper.</li>  
                    <li>Stir-fry everything until evenly coated and slightly smoky.</li>
                    <li>Add sliced spring onions and stir briefly.</li>  
                    <li>Adjust seasoning if needed.</li>
                    <li>Plate the fried rice, top with a fried egg.</li>  
                    <li>Garnish with cucumber, tomatoes, fried shallots, and crackers.</li>
                </ol>
            </div>
        </div>


        <!-- Dessert Carousel -->
        <div class="carousel" id="DessertCarousel">
            <hr>
            <h1>DESSERT</h1>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/tres leches.jpg" alt="Turkish Tres Leches Cake">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Turkish Tres</h2> 
                            <h2>Leches Cake</h2>
                            <a href="#DessertCarousel" class="btn openModal" data-modal="recipeModal7">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/carrot cake.jpg" alt="Carrot Cake">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Carrot</h2>
                            <h2>Cake</h2>
                            <a href="#DessertCarousel" class="btn openModal" data-modal="recipeModal8">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/cookies.jpg" alt="Chocolate Chip Cookies">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Chocolate</h2>
                            <h2>Chip Cookies</h2>
                            <a href="#DessertCarousel" class="btn openModal" data-modal="recipeModal9">Click for Recipe</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/cinnamon.jpg" alt="Cinnamon Cake with Rosemary & Fig">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Cinnamon Cake</h2>
                            <h2>with Rosemary & Fig</h2>
                            <a href="#DessertCarousel" class="btn openModal" data-modal="recipeModal10">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/blueberry.jpg" alt="Vanilla Bean Cake with Nettle & Blueberry">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Vanilla Bean Cake with Nettle</h2>
                            <h2>& Blueberry</h2>
                            <a href="#DessertCarousel" class="btn openModal" data-modal="recipeModal11">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/nosferatu.jpg" alt="Blackberry & Sage Chocolate Cake">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Nosferatu</h2>
                            <h2>Cake</h2>
                            <a href="#DessertCarousel" class="btn openModal" data-modal="recipeModal12">Click for Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-button prev" onclick="moveSlide('Dessert', -1)">&#10094;</button>
            <button class="carousel-button next" onclick="moveSlide('Dessert', 1)">&#10095;</button>
        </div>
        <div id="recipeModal7" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/T2wEFQ8qODA" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                </iframe>
                <h2>Turkish Tres Leches Recipe</h2>
                <hr>
                <p><strong>Cake Ingredients:</strong></p>
                <ul>
                    <li>5 eggs</li>
                    <li>1 cup granulated sugar</li>                                   
                    <li>1 cup all-purpose flour</li>
                    <li>1 tsp baking powder</li>
                    <li>1 tsp vanilla extract</li>
                </ul>
                <br>
                <p><strong>Milk Syrup Ingredients:</strong></p>
                <ul>
                    <li>3 cups cold milk</li>  
                    <li>1/2 cup granulated sugar</li>
                    <li>1 cup heavy cream (optional, for richness)</li>
                </ul>
                <br>
                <p><strong>Caramel Ingredients:</strong></p>
                <ul>
                    <li>1/2 cup sugar</li>
                    <li>1 tbsp butter</li>
                    <li>1/2 cup heavy cream</li>
                </ul>
                <br>
                <p><strong>Decoration</strong></p>
                <ul>
                    <li>Whipped cream</li>
                    <li>White chocolate or sweetened condensed milk for the pattern</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Preheat oven to 170°C (340°F).</li>  
                    <li>Beat eggs and sugar until very fluffy and pale.</li>  
                    <li>Add vanilla.</li>  
                    <li>Sift flour and baking powder, then gently fold into the egg mixture.</li>  
                    <li>Pour into a greased rectangular baking pan.</li>  
                    <li>Bake for 25-30 minutes until golden.</li>  
                    <li>Let the cake cool a bit, then poke holes all over the cake with a fork.</li>
                    <li>To make the milk syrup, mix milk, cream, and sugar until sugar dissolves.</li>  
                    <li>Slowly pour the milk syrup all over the warm cake. Let it soak for 1-2 hours in the fridge.</li>
                    <li>To make the caramel topping, melt sugar in a pan over medium heat until golden brown.</li>  
                    <li>Add butter, then slowly add heavy cream (be careful, it will bubble).</li>  
                    <li>Stir until smooth. Let it cool slightly.</li>
                    <li>Assemble the cake by spreading whipped cream on the soaked cake.</li>  
                    <li>Pour the caramel sauce on top.</li>  
                    <li>For the pattern, drizzle white chocolate or condensed milk in lines across the cake, then drag a toothpick in opposite directions to create the pattern.</li>
                    <li>Chill the cake for several hours or overnight for best taste.</li>  
                    <li>Cut into squares and serve cold.</li>
                </ol>
            </div>
        </div>
        
        <div id="recipeModal8" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/zRNcE-2beRA" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Carrot Cake Recipe</h2>
                <hr>
                <p><strong>Cake Ingredients:</strong></p>
                <ul>
                    <li>2 cups all-purpose flour</li>  
                    <li>2 tsp baking powder</li>  
                    <li>1½ tsp baking soda</li>  
                    <li>½ tsp salt</li>  
                    <li>2 tsp ground cinnamon</li>  
                    <li>½ tsp ground nutmeg</li>  
                    <li>½ tsp ground ginger (optional)</li>  
                    <li>1 cup vegetable oil</li>  
                    <li>1 cup granulated sugar</li>  
                    <li>1 cup brown sugar</li>  
                    <li>4 large eggs</li>  
                    <li>2 cups grated carrots (about 3-4 medium carrots)</li>  
                    <li>½ cup crushed pineapple (drained) — optional but makes it extra moist</li>  
                    <li>¾ cup chopped walnuts or pecans — optional</li>  
                    <li>½ cup raisins — optional</li>
                </ul>
                <br>
                <p><strong>Cream Cheese Frosting Ingredients:</strong></p>
                <ul>
                    <li>250 g cream cheese (softened)</li>  
                    <li>100 g unsalted butter (softened)</li>  
                    <li>2 cups powdered sugar (adjust to taste)</li>  
                    <li>1 tsp vanilla extract</li>  
                    <li>>A pinch of salt </li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Preheat oven to 175°C (350°F). Grease and line a 20x20 cm or round 22 cm cake pan.</li>  
                    <li>In a bowl, whisk together flour, baking powder, baking soda, salt, cinnamon, nutmeg, and ginger.</li>  
                    <li>In a separate large bowl, beat oil, granulated sugar, and brown sugar until combined.</li>  
                    <li>Add eggs one at a time, mixing well.</li>  
                    <li>Fold in the grated carrots, pineapple, nuts, and raisins (if using).</li>  
                    <li>Gradually add the dry ingredients to the wet mixture. Mix until just combined (don’t overmix).</li>  
                    <li>Pour into the prepared pan and bake for 40-50 minutes or until a toothpick comes out clean.</li>  
                    <li>Let the cake cool completely.</li>
                    <li>To make cream cheese frosting, beat cream cheese and butter until smooth and fluffy.</li>  
                    <li>Add powdered sugar gradually and beat until creamy.</li>  
                    <li>Add vanilla extract and a pinch of salt. Mix well.</li>
                    <li>Spread the cream cheese frosting over the cooled cake.</li>  
                    <li>Optionally sprinkle with extra nuts or grated carrots for decoration.</li>
                    <li>Refrigerate for 1-2 hours before slicing for best texture.</li>
                </ol>
            </div>
        </div>
        
        <div id="recipeModal9" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/f-M3JN_7LGU" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Chocolate Chip Cookies Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>225 g unsalted butter (softened)</li>  
                    <li>150 g granulated sugar</li>  
                    <li>150 g brown sugar</li>  
                    <li>2 large eggs</li>  
                    <li>1 tsp vanilla extract</li>  
                    <li>300 g all-purpose flour</li>  
                    <li>1 tsp baking soda</li>  
                    <li>½ tsp salt</li>  
                    <li>200-250 g chocolate chips (dark/milk/white — up to your taste)</li>  
                    <li>Optional: sea salt flakes for topping</li>  
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>In a bowl, beat softened butter with granulated sugar and brown sugar until creamy and fluffy.</li>  
                    <li>Add eggs one at a time, beating well after each addition.</li>  
                    <li>Add vanilla extract and mix.</li>  
                    <li>In another bowl, whisk together flour, baking soda, and salt.</li>  
                    <li>Gradually add the dry ingredients into the wet mixture. Mix until combined.</li>  
                    <li>>Fold in chocolate chips.</li>
                    <li>Chill the dough in the fridge for 30-60 minutes (optional but highly recommended for extra flavor and better texture).</li>
                    <li>Preheat the oven to 175°C (350°F).</li>  
                    <li>Scoop dough (about 1 tbsp or ice cream scoop size) onto a baking tray lined with parchment paper. Leave space between them.</li>  
                    <li>Bake for 10-12 minutes or until edges are golden but the center still looks slightly soft.</li>  
                    <li>Optional: Sprinkle sea salt flakes on top right after baking for extra flavor contrast.</li>  
                    <li>>Let cool on the tray for 5 minutes, then transfer to a wire rack.</li>
                </ol>
                <br>
                <p><strong><span>Tips</span></strong><p>
                <ul>
                    <li>For extra gooey cookies: Take them out of the oven when the center looks slightly underbaked — they will continue to set while cooling.</li>  
                    <li>For crispier cookies: Bake a little longer (about 13-14 minutes).</li>  
                    <li>You can add chopped nuts or use a mix of dark, milk, and white chocolate for variety.</li>
                </ul>
            </div>
        </div>
    
        <div id="recipeModal10" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                    <img src="image/cinnamon edit.png" width="560" height="315" frameborder="0">
                <h2>Cinnamon Cake with Rosemary Fig Recipe</h2>
                <hr>
                <p><strong>Cake Ingredients:</strong></p>
                <ul>
                    <li>250 g all-purpose flour</li>  
                    <li>200 g granulated sugar</li>  
                    <li>1 tbsp baking powder</li>  
                    <li>1/2 tsp salt</li>  
                    <li>3 tbsp ground cinnamon</li>  
                    <li>250 ml olive oil (light, not too strong)</li>  
                    <li>4 large eggs</li>  
                    <li>200 ml milk</li>  
                    <li>1 tsp vanilla extract</li>  
                </ul>
                <br>
                <p><strong>Cake Soak Ingredients:</strong></p>
                <ul>
                    <li>1/2 cup brown sugar</li>  
                    <li>1/2 cup water</li>
                </ul>
                <br>
                <p><strong>Rosemary Mousse Ingredients:</strong></p>
                <ul>
                    <li>3/4 cup heavy cream</li>  
                    <li>2-3 sprigs fresh rosemary</li>  
                    <li>2 tsp vanilla extract or vanilla bean paste</li>  
                    <li>2 tbsp powdered sugar</li>  
                    <li>3/4 tsp unflavored gelatin powder</li>  
                    <li>1 tbsp water</li>
                </ul>
                <br>
                <p><strong>Fig Cinnamon Buttercream Ingredients:</strong></p>
                <ul>
                    <li>150 g unsalted butter, room temperature</li>  
                    <li>250 g powdered sugar, sifted</li>  
                    <li>3/4 cup good quality fig preserves</li>  
                    <li>2 tbsp ground cinnamon</li>  
                    <li>Pinch of salt</li>
                </ul>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>First, let's make the cake batter. Preheat oven to 170°C (340°F). Grease and line 2 round cake pans (15-18 cm).</li>  
                    <li>In a bowl, whisk together flour, sugar, baking powder, salt, and cinnamon.</li>  
                    <li>In another bowl, whisk olive oil, eggs, milk, and vanilla.</li>  
                    <li>Gradually mix the wet ingredients into the dry ingredients until smooth.</li>  
                    <li>Divide into the pans and bake for 30-35 minutes or until a toothpick comes out clean.</li>  
                    <li>Let the cakes cool completely.</li>
                    <li>While witing for the cake to cool down, let's make the cake soak by combine brown sugar and water in a bowl.</li>
                    <li>Microwave for 1-2 minutes until sugar dissolves. Chill until ready to use.</li>
                    <li>Make the Rosemary Mousse by heating heavy cream and rosemary in a small saucepan until just under boiling. Remove from heat and let cool completely.</li>  
                    <li>Discard rosemary and chill the cream until cold.</li>  
                    <li>Bloom gelatin in water for 5 minutes.</li>  
                    <li>Whip the rosemary cream with vanilla and powdered sugar until soft peaks.</li>  
                    <li>Melt the gelatin (microwave for 5-10 seconds), then slowly add it while whipping the cream until stiff peaks.</li>  
                    <li>Chill the mousse for at least 1 hour before using.</li>
                    <li>Make the Fig Cinnamon Buttercream by beating butter until creamy and pale (3-5 minutes).</li>  
                    <li>Gradually add powdered sugar.</li>  
                    <li>Add fig preserves, cinnamon, and a pinch of salt. Mix until smooth and fluffy.</li>
                    <li>Now let's assemble the cake. Place the first cake layer on a serving plate.</li>  
                    <li>Brush generously with cake soak.</li>  
                    <li>Spread a thin layer of fig cinnamon buttercream.</li>  
                    <li>Spread an even layer of rosemary mousse.</li>  
                    <li>Add the second cake layer. Repeat the soak, buttercream, and mousse layers.</li>  
                    <li>Crumb coat the whole cake with buttercream and chill for 15 minutes.</li>  
                    <li>Add the final buttercream layer and decorate as desired — fresh rosemary, figs, or sugared grapes work beautifully.</li>
                </ol>
            </div>
        </div>
        
        <div id="recipeModal11" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                    <img src="image/blueberry.png" width="560" height="315" frameborder="0">
                <h2>Vanilla Bean Cake with Nettle & Blueberry Recipe</h2>
                <hr>
                <p><strong>Cake Ingredients:</strong></p>
                <ul>
                    <li>200 g all-purpose flour</li>  
                    <li>150 g granulated sugar</li>  
                    <li>1 tbsp baking powder</li>  
                    <li>1/2 tsp salt</li>  
                    <li>3 large eggs</li>  
                    <li>150 ml light olive oil</li>  
                    <li>150 ml milk</li>  
                    <li>1 tsp vanilla extract</li>
                </ul> 
                <br>
                <p><strong>Cake Soak Ingredients:</strong></p>
                <ul>
                    <li>1/4 cup granulated sugar</li>  
                    <li>1/4 cup water</li>  
                    <li>1 tbsp vanilla extract</li>
                </ul>
                <br>  
                <p><strong>Blueberry Thyme Coulis Ingredients:</strong></p>
                <ul>
                    <li>2 cups fresh blueberries</li>  
                    <li>3-4 sprigs fresh thyme</li>  
                    <li>1/4 cup granulated sugar</li>  
                    <li>2 tbsp lemon juice</li>  
                    <li>Pinch of salt</li>
                </ul>  
                <br>
                <p><strong>Nettle Buttercream Ingredients:</strong></p>
                <ul>
                    <li>150 g egg whites (about 5 large eggs)</li>  
                    <li>250 g granulated sugar</li>  
                    <li>300 g unsalted butter, at room temperature</li>  
                    <li>3 tbsp dried nettle leaves, finely crushed into powder</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>First, let's make the cake. Preheat the oven to 170°C (340°F). Grease and line two 15-18 cm round cake pans.</li>  
                    <li>In a large bowl, whisk together flour, sugar, baking powder, and salt.</li>  
                    <li>In another bowl, whisk together eggs, olive oil, milk, and vanilla.</li>  
                    <li>Pour the wet ingredients into the dry, and mix until smooth.</li>  
                    <li>Divide the batter between pans and bake for 30-35 minutes, or until a toothpick comes out clean.</li>  
                    <li>Let cool completely before assembling.</li>
                    <li>Now, let's make the cake soak by combining sugar, water, and vanilla in a heatproof bowl.</li>  
                    <li>Microwave for 1-2 minutes until the sugar has dissolved.</li>  
                    <li>Chill until ready to use.</li>
                    <li>Let's make the blueberry thyme coulis. In a saucepan over high heat, combine all ingredients.</li>  
                    <li>Bring to a boil, then reduce to a simmer for about 20 minutes, until the berries break down.</li>  
                    <li>Remove thyme sprigs, then blend the mixture until smooth.</li>  
                    <li>Strain through a fine mesh sieve.</li>  
                    <li>Let cool completely before using.</li>
                    <li>Let's make the nettle buttercream. In a heatproof bowl, combine egg whites, sugar, and nettle powder.</li>  
                    <li>Place over a pot of simmering water (bain-marie) and whisk until the sugar has dissolved and the mixture reaches about 70°C (160°F).</li>  
                    <li>Transfer to a stand mixer and whip until stiff peaks form and the bowl is cool to the touch.</li>  
                    <li>Gradually add butter, a little at a time, whipping until smooth and fluffy.</li>
                    <li>Let's assemble the cake. Place one cake layer on your serving plate or cake board.</li>  
                    <li>Generously brush with the vanilla soak. Let it sit for 1-2 minutes.</li>  
                    <li>Spread an even layer of buttercream over the cake.</li>  
                    <li>Create a buttercream dam around the edge to hold the coulis.</li>  
                    <li>Fill the center with blueberry thyme coulis.</li>  
                    <li>Place the second cake layer on top, press down gently.</li>  
                    <li>Brush with cake soak and let sit again for 1-2 minutes.</li>  
                    <li>Apply a thin crumb coat of buttercream all over the cake.</li>  
                    <li>Chill for 15 minutes until set.</li>  
                    <li>Apply the final buttercream layer, smoothing it out evenly.</li>  
                    <li>Decorate as desired — swirl extra coulis into the frosting or garnish with fresh flowers, thyme, or berries.</li>
                </ol>
            </div>
        </div>
        
        <div id="recipeModal12" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                    <img src="image/nosferatu.png" width="560" height="315" frameborder="0">
                <h2>Nosferatu Recipe</h2>
                <hr>
                <p><strong>Cake Ingredients:</strong></p>
                <ul>
                    <li>170 g almond paste, cut into small pieces</li>  
                    <li>215 g unsalted butter, softened</li>  
                    <li>215 g granulated sugar</li>  
                    <li>4.5 large eggs, room temperature (weigh the last egg, beat it, and use half the weight)</li>  
                    <li>1/4 tsp vanilla extract</li>  
                    <li>100 g pastry flour (or 50 g all-purpose flour + 50 g cake flour)</li>  
                    <li>1/4 + 1/8 tsp baking powder</li>  
                    <li>Contents of 2 Earl Grey tea bags</li>  
                    <li>Pinch of salt</li>
                </ul>  
                <br>
                <p><strong>Cake Soak Ingredients:</strong></p>
                <ul>
                    <li>120 ml water</li>  
                    <li>100 g granulated sugar</li>  
                    <li>1 tbsp rose water</li>
                </ul>   
                <br>
                <p><strong>Blackberry Thyme Coulis Ingredients:</strong></p>
                <ul>
                    <li>4 cups fresh blackberries</li>  
                    <li>3 sprigs fresh thyme</li>  
                    <li>1/4 cup granulated sugar</li>  
                    <li>2 tbsp lemon juice</li>  
                    <li>Pinch of salt</li>
                </ul> 
                <br>
                <p><strong>Violet Buttercream Ingredients:</strong></p>
                <ul>
                    <li>150 g unsalted butter, room temperature</li>  
                    <li>250 g powdered sugar, sifted</li>
                    <li>3 tsp violet extract</li>  
                    <li>Contents of 2 Earl Grey tea bags</li>
                </ul> 
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Preheat the oven to 325°F (160°C). Grease three 6-inch cake pans with butter and line the bottom and sides with parchment paper. Set aside.</li>
                    <li>In the bowl of a stand mixer, beat the almond paste and butter on medium-high speed until smooth and combined.</li>
                    <li>Add granulated sugar and Earl Grey tea, then beat again until pale, fluffy, and well incorporated.</li>
                    <li>Add vanilla extract and eggs, mixing until combined.</li>
                    <li>In a separate bowl, sift together pastry flour, baking powder, and salt.</li>
                    <li>Add the dry ingredients to the wet mixture and mix on low speed until just combined. Scrape down the sides of the bowl as needed. Do not overmix.</li>
                    <li>Divide the batter evenly among the prepared pans. Smooth the tops and bake for 40-45 minutes, or until golden brown and a toothpick inserted comes out clean.</li>
                    <li>Let the cakes cool in the pans for 15 minutes, then remove from the pans and transfer to a wire rack. Allow the cakes to cool completely before frosting.</li>
                    <li>For the cake soak, combine water, sugar, and rose water in a heatproof bowl or mug. Microwave for 1-2 minutes until the sugar dissolves. Set aside to cool.</li>
                    <li>For the coulis, combine blackberries, thyme, sugar, lemon juice, and salt in a saucepan over high heat. Bring to a boil, then reduce to a simmer for about 20 minutes, until the berries break down.</li>
                    <li>Remove the thyme sprigs, blend the mixture until smooth, and strain through a fine mesh sieve to remove seeds. Set aside to cool completely.</li>
                    <li>For the buttercream, prepare Swiss Meringue Buttercream as usual. Add the contents of Earl Grey tea bags to the egg white and sugar mixture before heating. Add violet extract along with the vanilla extract. Set aside until ready to use.</li>
                    <li>To assemble the cake, place the first cake layer on your serving plate or cake board. Brush generously with the cooled cake soak and let sit for 1-2 minutes.</li>
                    <li>Spread an even layer of buttercream on top, then create a dam around the edge using buttercream.</li>
                    <li>Fill the center with blackberry thyme coulis, spreading it evenly.</li>
                    <li>Add the second cake layer and repeat the process — soak, buttercream, and coulis.</li>
                    <li>Add the final cake layer, brush with soak, and let sit.</li>
                    <li>Apply a thin crumb coat of buttercream over the entire cake and refrigerate for 15 minutes until set.</li>
                    <li>Finish with a final layer of buttercream, smoothing or decorating as desired.</li>
                    <li>Garnish with additional coulis, fresh flowers, or piping details as preferred.</li>
                </ol>   
            </div>
        </div>


        <!-- Beverage Carousel -->
        <div class="carousel" id="BeverageCarousel">
            <hr>
            <h1>BEVERAGE</h1>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/tea.jpg" alt="Iced Jasmine Tea">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Iced Jasmine Tea</h2>
                            <a href="#BeverageCarousel" class="btn openModal" data-modal="recipeModal13">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/strawberry.jpg" alt="Strawberry Milkshake">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Strawberry Milkshake</h2>
                            <a href="#BeverageCarousel" class="btn openModal" data-modal="recipeModal14">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/butterscotch.jpg" alt="Butterscotch Sea Salt Latte">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Butterscotch Sea Salt Latte</h2>
                            <a href="#BeverageCarousel" class="btn openModal" data-modal="recipeModal15">Click for Recipe</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/matcha_latte.jpg" alt="Matcha Latte">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Matcha Latte</h2>
                            <a href="#BeverageCarousel" class="btn openModal" data-modal="recipeModal16">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/tropical_itch.png" alt="Tropical Itch">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Tropical Itch</h2>
                            <a href="#BeverageCarousel" class="btn openModal" data-modal="recipeModal17">Click for Recipe</a>
                        </div>
                    </div>
                    <div class="menu_card">
                        <div class="menu_image">
                            <img src="image/iced_americano.jpg" alt="Iced Americano">
                        </div>
                        <div class="small_card">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="menu_info">
                            <h2>Iced Americano</h2>
                            <a href="#BeverageCarousel" class="btn openModal" data-modal="recipeModal18">Click for Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-button prev" onclick="moveSlide('Beverage', -1)">&#10094;</button>
            <button class="carousel-button next" onclick="moveSlide('Beverage', 1)">&#10095;</button>
        </div>

        <div id="recipeModal13" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/q4U4scUT2ic" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Iced Jasmine Tea Recipe</h2>
                <hr>
                <p><strong>Ingredients (2 servings):</strong></p>
                <ul>
                    <li>2 tsp jasmine tea leaves (or 2 jasmine tea bags)</li>  
                    <li>500 ml hot water (around 85°C – don’t use boiling water)</li>  
                    <li>Ice cubes</li>  
                    <li>Optional: Honey or sugar syrup, to taste<li>  
                    <li>Optional garnish: Lemon slices, mint leaves, or jasmine flowers</li>  
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Place jasmine tea leaves or tea bags in a teapot or heatproof jug.</li>  
                    <li>Pour hot water (85°C) over the tea.</li>  
                    <li>Let it steep for 3-5 minutes — the longer you steep, the stronger the flavor (but don’t over-steep or it may turn bitter).</li>  
                    <li>If you like it sweet, stir in honey or sugar syrup while the tea is still warm.</li>
                    <li>Remove tea leaves or tea bags.</li>  
                    <li>Let the tea cool to room temperature, then chill in the fridge for 30 minutes (optional for stronger flavor).</li>  
                    <li>Fill a glass with ice cubes and pour the tea over the ice.</li>  
                    <li>Garnish with lemon slices, mint leaves, or a few edible jasmine flowers for a beautiful touch.</li>
                </ol>
                <p><strong><span>Tips</span></strong><p>
                <ul>
                    <li>For a stronger floral aroma: Add a few dried jasmine flowers when brewing.</li>  
                    <li>For jasmine milk tea: Add a splash of sweetened condensed milk or fresh milk after brewing.</li>
                </ul>
            </div>
        </div>
        <div id="recipeModal14" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/tQSB09KMzAg" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Strawberry Milkshake Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>1 cup fresh strawberries, hulled and sliced</li>
                    <li>2 cups vanilla ice cream</li>
                    <li>1 cup cold milk</li>
                    <li>2 tablespoons sugar (optional, adjust to taste)</li>
                    <li>Whipped cream, for topping (optional)</li>
                    <li>Fresh strawberries, for garnish (optional)</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Place the sliced strawberries, vanilla ice cream, milk, and sugar into a blender.</li>
                    <li>Blend on high speed until smooth and creamy.</li>
                    <li>Taste and adjust the sweetness if necessary by adding more sugar.</li>
                    <li>Pour the milkshake into glasses.</li>
                    <li>Top with whipped cream and garnish with fresh strawberries if desired.</li>
                    <li>Serve immediately while cold and enjoy!</li>
                </ol>
            </div>
        </div>
        <div id="recipeModal15" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/xRXgD1rDNR0" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Butterscotch Sea Salt Latte Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>1 cup milk (dairy or non-dairy)</li>
                    <li>1 shot espresso (or 1/4 cup strong brewed coffee)</li>
                    <li>2 tablespoons butterscotch sauce (store-bought or homemade)</li>
                    <li>1/4 teaspoon sea salt flakes (plus extra for topping)</li>
                    <li>Whipped cream, for topping (optional)</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Heat the milk in a small saucepan over medium heat until steaming (do not boil).</li>
                    <li>Add the butterscotch sauce and sea salt to the hot milk, stirring until fully dissolved and combined.</li>
                    <li>Prepare a shot of espresso or brew a strong cup of coffee.</li>
                    <li>Pour the hot coffee into a mug.</li>
                    <li>Add the butterscotch milk mixture to the coffee and stir well.</li>
                    <li>Top with whipped cream if desired, then drizzle with extra butterscotch sauce and a sprinkle of sea salt flakes.</li>
                    <li>Serve warm and enjoy your cozy butterscotch sea salt latte!</li>
                </ol>
            </div>
        </div>
        <div id="recipeModal16" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/lFIqlZgQ9es" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Matcha Latte Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>1 teaspoon matcha powder (ceremonial grade recommended)</li>
                    <li>2 tablespoons hot water (about 80°C)</li>
                    <li>1 cup milk (dairy or non-dairy, like oat or almond milk)</li>
                    <li>1-2 teaspoons honey or simple syrup (optional, for sweetness)</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Sift the matcha powder into a small bowl to avoid clumps.</li>
                    <li>Add hot water and whisk vigorously in a zig-zag motion until frothy and fully dissolved.</li>
                    <li>Heat the milk in a small saucepan over medium heat until steaming (but not boiling).</li>
                    <li>Froth the milk using a milk frother or by whisking vigorously.</li>
                    <li>Pour the prepared matcha into a mug.</li>
                    <li>Add honey or syrup if desired, and stir well.</li>
                    <li>Slowly pour the steamed milk over the matcha, holding back the foam with a spoon if needed.</li>
                    <li>Top with milk foam and an extra dusting of matcha powder if desired.</li>
                    <li>Serve warm and enjoy your matcha latte!</li>
                </ol>
            </div>
        </div>
        <div id="recipeModal17" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/65D0qbB_B30" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Tropical Itch Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>1 oz dark rum</li>
                    <li>1 oz light rum</li>
                    <li>1 oz passion fruit syrup</li>
                    <li>1 oz orange juice</li>
                    <li>1 oz pineapple juice</li>
                    <li>1/2 oz lemon juice</li>
                    <li>1/2 oz simple syrup (optional, for added sweetness)</li>
                    <li>1 dash bitters</li>
                    <li>Crushed ice</li>
                    <li>Garnish: pineapple wedge, cherry, cocktail umbrella, or bamboo swizzle stick</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Fill a cocktail shaker with ice.</li>
                    <li>Add dark rum, light rum, passion fruit syrup, orange juice, pineapple juice, lemon juice, simple syrup, and bitters.</li>
                    <li>Shake vigorously for 10-15 seconds until chilled.</li>
                    <li>Fill a tall glass with crushed ice.</li>
                    <li>Strain the cocktail mixture into the glass over the ice.</li>
                    <li>Garnish with a pineapple wedge, cherry, and swizzle stick or umbrella.</li>
                    <li>Serve immediately and enjoy your Tropical Itch!</li>
                </ol>
            </div>
        </div>
        <div id="recipeModal18" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/ZUQkOOVuLVM" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                <h2>Iced Americano Recipe</h2>
                <hr>
                <p><strong>Ingredients:</strong></p>
                <ul>
                    <li>2 shots of espresso (about 60 ml)</li>
                    <li>120-180 ml cold water (adjust to taste)</li>
                    <li>Ice cubes</li>
                </ul>
                <br>
                <p><strong>Instructions:</strong></p>
                <ol>
                    <li>Brew 2 shots of espresso using an espresso machine or moka pot.</li>
                    <li>Fill a glass with ice cubes.</li>
                    <li>Pour the freshly brewed espresso over the ice.</li>
                    <li>Add cold water to the glass, adjusting the amount based on how strong or light you prefer your drink.</li>
                    <li>Stir well to combine.</li>
                    <li>Serve immediately and enjoy your refreshing Iced Americano.</li>
                </ol>
            </div>
        </div>           
    </div>

    <!-- Team -->
    <div class="team">
        <h1>Our<span>Team</span></h1>
        <div class="team_box">
            <div class="profile">
                <img src="image/chef1.jpg" alt="Chef 1">
                <div class="info">
                    <h2 class="name">Anasella Rusita Resmi</h2>
                    <p class="bio">2303421039</p>
                    <p>BM 4B</p>
                    <div class="team_icon">
                        <a href="https://www.instagram.com/anasellarst?igsh=a3puZjFndDFqbDhv">
                        <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="image/chef2.jpg" alt="Chef 2">
                <div class="info">
                    <h2 class="name">Jeanetta Nifilinia Zebua</h2>
                    <p class="bio">2303421032</p>
                    <p>BM 4B</p>
                    <div class="team_icon">
                        <a href="https://www.instagram.com/janetzebua?igsh=MWlyanJlYjgzdnI5bg==">
                        <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer_main">
            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p><a href="#Home">Home</a></p>
                <p><a href="#About">About</a></p>
                <p><a href="#Menu">Menu</a></p>
            </div>
            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+62 812 8393 1xxx</p>
                <p>+62 838 7010 1xxx</p>
                <p><a href="https://mail.google.com/mail/?view=cm&fs=1&to=anasella.rusita.resmi.te23@stu.pnj.ac.id" target="_blank">anasella.rusita.resmi.te23@stu.pnj.ac.id</a></p>
                <p><a href="https://mail.google.com/mail/?view=cm&fs=1&to=jeannetta.nifilinia.zebua.te23@stu.pnj.ac.id" target="_blank">jeannetta.nifilinia.zebua.te23@stu.pnj.ac.id</a></p>
            </div>
            <div class="footer_tag">
                <h2>With Love</h2>
                <div class="logo">
                    <img src="image/logo.png" alt="Logo">
                </div>
            </div>
        </div>
        <small><p class="end">Design by <span><i class="fa-solid fa-face-grin"></i> Anasella & Jeanetta</span></p>
    </footer>

<!--JAVASCRIPT-->
    <script>
        const slides = {
        MainCourse: 0,
        Dessert: 0,
        Beverage: 0
    };

    function moveSlide(section, direction) {
        const totalSlides = document.querySelectorAll(`#${section}Carousel .carousel-slide`) .length;

        slides[section] += direction;

        if (slides[section] < 0) {
            slides[section] = totalSlides - 1; // Loop to last slide
        } 
        else if (slides[section] >= totalSlides) {
            slides[section] = 0; // Loop to first slide
        }

        const offset = -slides[section] * 100; // Move the slide
        document.querySelectorAll(`#${section}Carousel .carousel-container`).forEach(container => {
            container.style.transform = `translateX(${offset}%)`;
        });
    }

    // Modal functionality for Menu
    document.querySelectorAll('.openModal').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        let modalId = this.getAttribute('data-modal');
        let modal = document.getElementById(modalId);
        modal.style.display = "block";
    });
});

    document.querySelectorAll('.modal .close').forEach(closeButton => {
        closeButton.addEventListener('click', function() {
            let modal = this.closest('.modal');
            modal.style.display = "none";
            
            // Hentikan video saat modal ditutup
            let iframe = modal.querySelector("iframe");
            if (iframe) {
                iframe.src = iframe.src;
        }
    });
});

window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";

        // Hentikan video saat modal ditutup dengan klik luar
        let iframe = event.target.querySelector("iframe");
        if (iframe) {
            iframe.src = iframe.src;
        }
    }
};

    // You can replicate the modal functionality for other recipes as needed
        
        // Sample menu items with their respective section IDs
        const menuItems = [
            { name: "Roasted Chicken with Terasi Sambal", sectionId: "MainCourseCarousel", slideIndex: 0 },
            { name: "Vietnamese Spring Roll", sectionId: "MainCourseCarousel", slideIndex: 0 },
            { name: "Beef Sei", sectionId: "MainCourseCarousel", slideIndex: 0 },
            { name: "Spaghetti", sectionId: "MainCourseCarousel", slideIndex: 1 },
            { name: "Fish & Chips", sectionId: "MainCourseCarousel", slideIndex: 1 },
            { name: "Nasi Goreng", sectionId: "MainCourseCarousel", slideIndex: 1 },
            { name: "Turkish Tres Leches Cake", sectionId: "DessertCarousel", slideIndex: 0 },
            { name: "Carrot Cake", sectionId: "DessertCarousel", slideIndex: 0 },
            { name: "Chocolate Chip Cookies", sectionId: "DessertCarousel", slideIndex: 0 },
            { name: "Cinnamon Cake with Rosemary & Fig", sectionId: "DessertCarousel", slideIndex: 1 },
            { name: "Vanilla Bean Cake with Nettle & Blueberry", sectionId: "DessertCarousel", slideIndex: 1 },
            { name: "Nosferatu Cake", sectionId: "DessertCarousel", slideIndex: 1 },
            { name: "Iced Jasmine Tea", sectionId: "BeverageCarousel", slideIndex: 0 },
            { name: "Strawberry Milkshake", sectionId: "BeverageCarousel", slideIndex: 0 },
            { name: "Butterscotch Sea Salt Latte", sectionId: "BeverageCarousel", slideIndex: 0 },
            { name: "Matcha Latte", sectionId: "BeverageCarousel", slideIndex: 1 }, // On second slide
            { name: "Tropical Itch", sectionId: "BeverageCarousel", slideIndex: 1 },
            { name: "Iced Americano", sectionId: "BeverageCarousel", slideIndex: 1 }  // On second slide
        ];

        // Listen for 'Enter' key press in the search input
        document.getElementById('menuSearch').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                const query = this.value.toLowerCase();
                const foundItem = menuItems.find(item => item.name.toLowerCase().includes(query));
        
            if (foundItem) {
                // Scroll to the section
                document.getElementById(foundItem.sectionId).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

            // Move to the correct slide
            moveSlide(foundItem.sectionId.replace("Carousel", ""), foundItem.slideIndex);
            
            // Optional: Open the corresponding modal or highlight the item
            alert(`Searched for: ${foundItem.name}`);
        } else {
            alert('Menu not found');
        }
    }   
});

    function toggleReadMore(id) {
        var dots = document.getElementById(id + "-dots");
        var moreText = document.getElementById(id + "-more");
        var btn = document.getElementById(id + "-btn");

        if (moreText.style.display === "none") {
            dots.style.display = "none";
            moreText.style.display = "inline";
            btn.innerText = "Read less";
        } else {
            dots.style.display = "inline";
            moreText.style.display = "none";
            btn.innerText = "Read more";
        }
    }

    </script>
</body>
</html><?php /**PATH C:\Users\Janet\Herd\projek-uas\resources\views/index.blade.php ENDPATH**/ ?>