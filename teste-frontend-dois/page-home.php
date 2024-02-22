<?php 
// Template Name: Home
?>
<?php get_header();?>
<?php if (have_posts(  )) : while (have_posts(  )) : the_post(  ); ?>
    <section class="title-header">
      <div class="title-header-left">
        <h1><?php the_field('titulo')?> <span><?php the_field('subtitulo')?></span></h1>
        <p><?php the_field('texto_comercial')?></p>
        <p><strong><?php the_field('texto_comercial_negrito')?></strong></p>
        <p><?php the_field('texto_chamada_acao')?></p>
        <div class="title-links">
          <a href="#" class="premium">conheça o premium</a>
          <a href="#" class="free">cadastro grátis</a>
        </div>
      </div>
      <div class="title-header-right">
        <img src="<?php the_field('foto_decoracao')?>" alt="<?php the_field('foto_decoracao_alt')?>" />
        <img class="monitor" src="<?php echo get_stylesheet_directory_uri()?>/img/web-page.png" />
      </div>
    </section>
    <div class="header-detail">
      <img src="<?php echo get_stylesheet_directory_uri()?>/img/BG.png" />
    </div>
    <section class="information">
      <div class="information-left">
        <h2>Maior visibilidade para o seu negócio</h2>
        <p>
          Com a nossa plataforma você tem sua página
          <strong>personalizada</strong> dentro do site. Sempre que houverem
          buscas relacionadas ao seu local, ele terá uma
          <strong>maior relevância e visibilidade</strong> dentro dos nossos
          resultados.
        </p>
        <div class="information-link">
          <a href="#">Conheça o Premium</a>
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow.png" />
        </div>
      </div>
      <div class="information-right">
        <div class="visit">
          <h5>+ 12 <span>milhões</span></h5>
          <p>de visitas por mês</p>
        </div>
        <div class="location">
          <h5>+ 8 <span>milhões</span></h5>
          <p>de locais cadastrados</p>
        </div>
        <div class="category">
          <h5>+ <span>45</span></h5>
          <p>categorias para pesquisa</p>
        </div>
      </div>
    </section>
    <section class="services">
      <div class="optimization">
        <div class="right">
          <img class="img-big" src="<?php echo get_stylesheet_directory_uri()?>/img/monitor.png" />
          <img class="imgs-low" src="<?php echo get_stylesheet_directory_uri()?>/img/Bitmap.png" alt="Mulher mexendo no celular" />
        </div>
        <div class="left green-color">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/logo-google.png" />
          <h2>Site otimizado para o google</h2>
          <p>
            Esteja entre os primeiros resultados nas buscas por estabelecimento
            da sua categoria.
          </p>
          <div class="register">
            <a href="#">Cadastro Grátis</a>
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow.png" />
          </div>
        </div>
      </div>
      <div class="alexa">
        <div class="right">
          <h2>Seja sugerido pela Alexa</h2>
          <p>
            Você pergunta e a Alexa responde sugerindo o seu estabelecimento.
          </p>
          <div class="register">
            <a href="#">Cadastro Grátis</a>
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow.png" />
          </div>
        </div>
        <div class="left">
          <img class="img-big" src="<?php echo get_stylesheet_directory_uri()?>/img/foto3.png" alt="Mulher mexendo no celular" />
          <img class="imgs-low" src="<?php echo get_stylesheet_directory_uri()?>/img/alexa.png" />
        </div>
      </div>
      <div class="apple-maps">
        <div class="right">
          <img class="img-big" src="<?php echo get_stylesheet_directory_uri()?>/img/foto4.png" />
          <img class="imgs-low" src="<?php echo get_stylesheet_directory_uri()?>/img/gps.png" alt="Mulher mexendo no celular" />
        </div>
        <div class="left  green-color">
          <div class="maps">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/map.png" />
          <h2>Apareça no Apple Maps e CarPlay</h2>
          </div>          
          <p>
            Apareça nos resultados do GPS quando alguém buscar por
            estabelecimentos próximos
          </p>
          <div class="register">
            <a href="#">Conhaça o Premium</a>
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/arrow.png" />
          </div>
        </div>
      </div>
    </section>
    <main class="plans">
      <div class="free-plan min-width">
        <div class="title-plan">
          <h2>Cadastro Grátis</h2>
          <span>R$ 0</span>
          <p>seu espaço com ferramentas limitadas</p>
          <a href="#">cadastro grátis</a>
        </div>
        <div class="items">
          <ul>
            <li>Suporte técnico do atendimento</li>
            <li>Inserir fotos</li>
            <li>Inserir telefone (apenas 1)</li>
            <li>Informações sobre funcionamento</li>
            <li>Categorias (apenas 1)</li>
          </ul>
        </div>
        <a href="#" class="ml">cadastro grátis</a>
      </div>
      <div class="free-plan max-witdth">
        <div class="title-plan">
          <h2>Cadastro Grátis</h2>
          <span>R$ 0</span>
          <p>seu espaço com ferramentas limitadas</p>
          <a href="#">cadastro grátis</a>
        </div>
        <div class="items">
          <ul>
            <li class="yes">Suporte técnico do atendimento</li>
            <li class="yes">Inserir fotos</li>
            <li class="yes">Inserir telefone (apenas 1)</li>
            <li class="yes">Informações sobre funcionamento</li>
            <li class="yes">Categorias (apenas 1)</li>
            <li class="no">Descrição do local (até 3282 caracteres)</li>
            <li class="no">Inserir palavras-chave</li>
            <li class="no">Inserir vídeo</li>
            <li class="no">Informações sobre pagamento</li>
            <li class="no">Autonomia para edição completa da página:</li>
            <li class="no">Posição de destaque</li>
            <li class="no">Página sem concorrentes ou publicidade</li>
            <li class="no">Acesso ao painel de controle com estatísticas</li>
            <li class="no">Responder avaliações dos clientes</li>
            <li class="no">Caixa para mensagens diretas</li>
            <li class="no">Ativação de cupom de oferta</li>
            <li class="no">Raio de alcance estendido (até 10 cidades ou em todo Brasil)</li>
          </ul>
        </div>
        <a href="#" class="ml">cadastro grátis</a>
      </div>
      <div class="silver-plan min-width">
        <div class="title-plan">
          <h2>Plano Prata</h2>
          <span>R$ 70</span>
          <p>Mensal <img src="<?php echo get_stylesheet_directory_uri()?>/img/seta.png"></p>
          <a href="#">assine hoje</a>
        </div>
        <div class="items">
          <ul>
            <li>Todos os beneficíos do plano grátis</li>
            <li>Inserir telefone (até 3)</li>
            <li>Categorias (até 30)</li>
            <li>Descrição do local (até 3282 caracteres)</li>
            <li>Inserir palavras-chave</li>
            <li>Inserir vídeo</li>
            <li>Informações sobre pagamento</li>
            <li>Autonomia para edição completa da página</li>
            <li>Posição de destaque</li>
            <li>Página sem concorrentes ou publicidade</li>
            <li>Acesso ao painel de controle com estatísticas</li>
            <li>Responder avaliações dos clientes</li>
            <li>Caixa para mensagens diretas</li>
            <li>Ativação de cupom de oferta</li>
          </ul>
        </div>
        <a href="#" class="ml lm">assine hoje</a>
      </div>
      <div class="silver-plan max-witdth">
        <div class="title-plan">
          <h2 class="max">Plano Prata</h2>
          <span>R$ 70</span>
          <p>Mensal <img src="<?php echo get_stylesheet_directory_uri()?>/img/seta.png"></p>
          <a href="#">assine hoje</a>
        </div>
        <div class="items">
          <ul>
            <li class="yes">Suporte técnico do atendimento</li>
            <li class="yes">Inserir fotos</li>
            <li class="yes">Inserir telefone (até 3)</li>
            <li class="yes">Informações sobre funcionamento</li>
            <li class="yes">Categorias (até 3)</li>
            <li class="yes">Descrição do local (até 3282 caracteres)</li>
            <li class="yes">Inserir palavras-chave</li>
            <li class="yes">Inserir vídeo</li>
            <li class="yes">Informações sobre pagamento</li>
            <li class="yes">Autonomia para edição completa da página:</li>
            <li class="yes">Posição de destaque</li>
            <li class="yes">Página sem concorrentes ou publicidade</li>
            <li class="yes">Acesso ao painel de controle com estatísticas</li>
            <li class="yes">Responder avaliações dos clientes</li>
            <li class="yes">Caixa para mensagens diretas</li>
            <li class="yes">Ativação de cupom de oferta</li>
            <li class="no">Raio de alcance estendido (até 10 cidades ou em todo Brasil)</li>
          </ul>
        </div>
        <a href="#" class="ml">assine hoje</a>
      </div>
      <div class="platinum-plan min-width">
        <div class="title-plan">
          <h2>Plano Platinum</h2>
          <span>R$ 150</span>
          <p>Mensal <img src="<?php echo get_stylesheet_directory_uri()?>/img/seta.png"></p>
          <a href="#">assine hoje</a>
        </div>
        <div class="items">
          <ul>
            <li>Todos os benefícios do Plano Prata</li>
            <li>
              Raio de alcance estendido (até 10 cidades ou em todo Brasil)
            </li>
          </ul>
        </div>
        <a href="#" class="ml lm">assine hoje</a>
      </div>
      <div class="platinum-plan max-witdth">
        <div class="title-plan">
          <h2 class="max">Plano Platinum</h2>
          <span>R$ 150</span>
          <p>Mensal <img src="<?php echo get_stylesheet_directory_uri()?>/img/seta.png"></p>
          <a href="#">assine hoje</a>
        </div>
        <div class="items">
          <ul>
            <li class="yes">Suporte técnico do atendimento</li>
            <li class="yes">Inserir fotos</li>
            <li class="yes">Inserir telefone (até 3)</li>
            <li class="yes">Informações sobre funcionamento</li>
            <li class="yes">Categorias (até 3)</li>
            <li class="yes">Descrição do local (até 3282 caracteres)</li>
            <li class="yes">Inserir palavras-chave</li>
            <li class="yes">Inserir vídeo</li>
            <li class="yes">Informações sobre pagamento</li>
            <li class="yes">Autonomia para edição completa da página:</li>
            <li class="yes">Posição de destaque</li>
            <li class="yes">Página sem concorrentes ou publicidade</li>
            <li class="yes">Acesso ao painel de controle com estatísticas</li>
            <li class="yes">Responder avaliações dos clientes</li>
            <li class="yes">Caixa para mensagens diretas</li>
            <li class="yes">Ativação de cupom de oferta</li>
            <li class="yes">Raio de alcance estendido (até 10 cidades ou em todo Brasil)</li>
          </ul>
        </div>
        <a href="#" class="ml">assine hoje</a>
      </div>
    </main>
<?php endwhile; else: endif; ?>
<?php get_footer();?>
