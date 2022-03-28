<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POP Bookstore</title>
    
    <!--swipes left and right-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/books-collections.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home-page.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/books-collections.css')}}">

</head>

<body>
    
<header class="header">
    
@include('_shared.header') 


</header>
<!------------------------------------------------------------------------------------>

<!--login form-->
<div class="login-form-container">

@include('_shared.login') 

</div>

<!------------------------------------------------------------------------------------>

<!----------Books Collections------------>

<div class="component">
  <ul class="align">
    <!-- Book 1 -->
    <li>
      <figure class='book'>        
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/book1.png')}}" alt="" width="100%" height="100%">
            <span class="ribbon bestseller">Nº1</span>
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>Percy Jackson and The Lightning Thief</h1>
          <span>By Rick Riordan</span>
          <p>The Lightning Thief is a light-hearted fantasy about a modern 12-year-old boy who learns that his true father is Poseidon, 
              the Greek god of the sea. Percy sets out to become a hero by undertaking a quest across the United States to 
              find the entrance to the Underworld and stop a war between the gods.</p>
        </figcaption>
      </figure>
    </li>  
    <!-- Book 2 -->
    <li>
      <figure class='book'>        
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/book2.png')}}" alt="" width="100%" height="100%">
            <span class="ribbon new">NEW</span>
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>The Throne of Fire</h1>
          <span>By Rick Riordan</span>
          <p>It is the second novel in The Kane Chronicles series, which tells of the adventures of modern-day fourteen-year-old Carter Kane and his twelve-year-old sister - Sadie Kane, 
              as they discover that they are descended from the ancient Egyptian pharaohs Narmer and Ramesses the Great.</p>
        </figcaption>
      </figure>
    </li>  
    <!-- Book 3 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
            <img src="{{asset('assets/img/book3.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>Untamed</h1>
          <span>By Glennon Doyle</span>
          <p>In “Untamed,” Doyle writes about the ways in which she was caged by internalized misogyny, religious doctrine and homophobia, 
              an eating disorder that started in her early adolescence, alcoholism and what became a performative marriage</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 4 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/book4.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>To The Best Boys</h1>
          <span>By Mary Weber</span>
          <p>The task is simple: don a disguise. Survive the Labyrinth. Best the boys.</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 5 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/book5.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>Big Magic</h1>
          <span>By Elizabeth Gilbert</span>
          <p>Big Magic is an exploration of how creative people can excel in a world that belittles creativity. 
              Elizabeth Gilbert outlines how important it is that we don't try and fit our creative energy into the narrow field that society expects us to fit in. 
              Therefore, we shouldn't mix creative pleasures with work.</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 6 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/book5.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>Daisy and the Crimson Rose: A Pirate's Tale</h1>
          <span>By Shoshana Louise</span>
          <p>This action-packed, lust-filled drama will follow Daisy through her biggest life-altering period and take you to her final decision: 
              to be with a man that she loves or remain a pirate to sail the seas forever. What will she decide?</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 7 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/featured1.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>George Orwell 1984</h1>
          <span>By George Orwell</span>
          <p>1984 is a dystopian novella by George Orwell published in 1949, which follows the life of Winston Smith, 
              a low ranking member of 'the Party', who is frustrated by the omnipresent eyes of the party, and its ominous ruler Big Brother. 
              'Big Brother' controls every aspect of people's lives.</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 8 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/featured2.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>The Necklace</h1>
          <span>By Matt Witten</span>
          <p>The Necklace by Matt Witten follows the journey of a mother's cross-country trip to witness the execution of the murderer who slaughtered her 7-year-old daughter 20 years prior, 
              but a startling discovery could mean the wrong man is about to be put to death.</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 9 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/featured3.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>Red Clocks</h1>
          <span>By Leni Zumas</span>
          <p>In Red Clocks, women simply wake up one day to find that a president they didn't vote for, 
              a man with a history of extreme rhetoric and legislation on reproductive issues—has proposed a Personhood Amendment to the U.S. 
              Constitution, which a majority of states then vote to ratify.</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 10 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/featured4.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>Catch The Sparrow</h1>
          <span>By Rachel Rear</span>
          <p>Catch the Sparrow: A Search for a Sister and the Truth of Her Murder. Rear debuts with an engrossing account of her search for the truth about her stepsister's murder, 
              which leads to painful discoveries and frustrating answers. Stephanie Kupchynsky, a music teacher, disappeared in 1991 at age 27.</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 11 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/featured5.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>The Dangerous Book of Heroes</h1>
          <span>By Conn and David Iggulden</span>
          <p>Filled with the British sense of fair play and decency that made 'The Dangerous Book for Boys' so popular, 'The Dangerous Book of Heroes' 
              celebrates those who fought for what is right and good, those who made amazing discoveries, those who moved boundaries in their lifetimes.</p>
        </figcaption>
      </figure>
    </li>
    <!-- Book 12 -->
    <li>
      <figure class='book'>       
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
              <img src="{{asset('assets/img/featured6.png')}}" alt="" width="100%" height="100%">
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="#">Buy Now</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
        <figcaption>
          <h1>Ghostbusters</h1>
          <span>By Nancy Holder</span>
          <p>Erin Gilbert is disgraced at a job interview for her belief in ghosts, she is roped into investigating a haunting by her former colleague, 
              Abby Yates and Abby's new co-worker, Jillian Holtzmann. 
              The three scientists soon discover that some specters do far more than go bump in the night.</p>
        </figcaption>
      </figure>
    </li>
  </ul>  
</div>

<!------------------------------------------------------------------------------------>

<!--Footer-->
<section class="footer" style="margin-left:-200px;">   
  @include('_shared.footer') 
</section>
<!------------------------------------------------------------------------------------>
<script src="{{asset('assets/js/home-page.js')}}"></script>

</body>
</html>