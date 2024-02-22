<?php
// Template Name: Home2
?>
<?php get_header(); ?>
<?php if (have_posts(  )) : while (have_posts(  )) : the_post(  ); ?>
    </section>
    <section class="header-info">
      <div>
        <div class="header-left">
          <h1><?php the_field('title')?> <span>your daily jobs</span></h1>
          <h5>The only way to get things done.</h5>
          <a href="#"><?php the_field('link');?></a>
        </div>
      </div>
      <img
        class="img"
        src="<?php echo get_stylesheet_directory_uri()?>/img/foto.png"
        alt="Foto de uma mulher branca com cabelos pretos e sorrindo"
      />
    </section>
    <div class="bg">
      <img src="<?php echo get_stylesheet_directory_uri()?>/img/BG.png" />
    </div>
    <main class="content">
      <section class="content-first">
        <div>
          <h2>To-do List</h2>
          <p>
            Choose the right plan for you and get in touch <br />
            through our contact form. We are here to help.
          </p>
        </div>
      </section>
      <div class="detail">
        <section class="price">
          <div class="card">
            <div class="title">
              <h2>R$ 20 / mês</h2>
              <span>Basic Plan</span>
              <h5>unlimited tasks</h5>
            </div>
            <div class="tasks">
              <ul>
                <li class="yes"><?php the_field('item_one')?></li>
                <li class="yes"><?php the_field('item_two')?></li>
                <li class="no"><?php the_field('item-trhee')?></li>
                <li class="no"><?php the_field('item-four')?></li>
                <li class="no"><?php the_field('item-five')?></li>
              </ul>
              <a href="#">get in touch</a>
            </div>
          </div>
          <div class="card">
            <div class="title">
              <h2>R$ 30 / mês</h2>
              <span>Pro Plan</span>
              <h5>unlimited everything</h5>
            </div>
            <div class="tasks">
              <ul>
                <li class="yes">Create to-do lists</li>
                <li class="yes">Share lists via WhatsApp</li>
                <li class="yes">Offline mode</li>
                <li class="yes">Invite collaborators</li>
                <li class="yes">Dark mode</li>
              </ul>
            </div>
            <a href="#">get in touch</a>
          </div>
        </section>
      </div>
      <div class="container">
        <div class="bg-slider"></div>
        <section class="slider">
          <h2>good thing</h2>
          <div class="slider-items">
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image1.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p class="mrg">
                  Organize your daily job enhance your life performance
                </p>
                <a href="#">read more</a>
              </div>
            </div>
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image2.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p>
                  Mark one activity as done makes your brain understands the
                  power of doing.
                </p>
                <a href="#">read more</a>
              </div>
            </div>
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image3.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p>
                  Careful with misunderstanding the difference between a list of
                  things and a list of desires
                </p>
                <a href="#">read more</a>
              </div>
            </div>
          </div>
          <div class="slider-items block">
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image2.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p>
                  Mark one activity as done makes your brain understands the
                  power of doing.
                </p>
                <a href="#">read more</a>
              </div>
            </div>
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image3.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p>
                  Careful with misunderstanding the difference between a list of
                  things and a list of desires
                </p>
                <a href="#">read more</a>
              </div>
            </div>
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image1.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p class="mrg">
                  Organize your daily job enhance your life performance
                </p>
                <a href="#">read more</a>
              </div>
            </div>
          </div>
          <div class="slider-items block">
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image3.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p>
                  Careful with misunderstanding the difference between a list of
                  things and a list of desires
                </p>
                <a href="#">read more</a>
              </div>
            </div>
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image1.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p class="mrg">
                  Organize your daily job enhance your life performance
                </p>
                <a href="#">read more</a>
              </div>
            </div>
            <div class="slider-card">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/Image2.png" />
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/icone-coopers.png" class="logo-slider" />
              <div class="slider-info">
                <span>function</span>
                <p>
                  Mark one activity as done makes your brain understands the
                  power of doing.
                </p>
                <a href="#">read more</a>
              </div>
            </div>
          </div>
        </section>
        <div class="balls">
          <img class="ball" src="<?php echo get_stylesheet_directory_uri()?>/img/Ellipse3.png" />
          <img class="ball" src="<?php echo get_stylesheet_directory_uri()?>/img/Ellipse4.png" />
          <img class="ball" src="<?php echo get_stylesheet_directory_uri()?>/img/Ellipse4.png" />
        </div>
      </div>
      <section class="forms">
        <div class="photo">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/image-form.png" alt="Mulher negra sorrindo" />
        </div>
        <div class="form-title">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon-mail.png" />
          <h2>GET IN <span>TOUCH</span></h2>
        </div>
        <form action="" id="form" class="form">
          <div class="form-content">
            <label for="username">Your name</label>
            <input
              type="text"
              id="username"
              placeholder="type your name here..."
            />
            <div class="phone-mail">
              <div class="email">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" placeholder="example@example.com">
                <span class="block alertEmail">Please enter a valid email address</span>
              </div>
              <div class="phone">
                <label for="phone">Telephone*</label>
                <input type="tel" name="phone" id="phone" placeholder="( ) _____-____">
                <span class="block alertPhone">Please enter a valid phone number</span>
              </div>
            </div>
            <label for="message">Message*</label>
            <textarea placeholder="Type what you want to say to us" id="message" name="message" rows="10"></textarea>
            <span class="block alertMessage">Please write a message.</span>
            <button type="submit">SEND NOW</button>
            <span class="block" id="valid">Message sent successfully, please check your email.</span>
          </div>
        </form>
      </section>
    </main>
<?php endwhile; else: endif; ?>
<?php get_footer();?>
