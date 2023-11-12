
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>SESMAP S.A.S</title>
    <link rel="stylesheet" href="estiloprincipal.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="estilos.css">
    

  </head>
  
  <body>
    <a href="https://api.whatsapp.com/send?phone=3148445404" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
	</a>
    <header>
      <div class="container-hero">
        <div class="container hero">
          <div class="customer-support">
            <i class="fa-solid fa-headset" style="color: #000000"></i>
            <div class="content-customer-support">
              <span class="text">Soporte al Cliente</span>
              <span class="number">311-712-87-63</span>
            </div>
          </div>

          <div class="container-logo">
            <i class="fa-solid fa-wrench" style="color: #000000"></i>
            <h1 class="logo"><a href="imagenes/Logo.jpeg">SESMAP</a></h1>
          </div>

          <div class="container-user">
          <i class="fa-solid fa-gears" style="color: #000000;"></i>
            <i class="fa-solid fa-basket-shopping" style="color: #000000"></i>

            <div class="content-shopping-cart" >
              <span class="text">Compras</span>
              <span class="number" id="cart-count">(0)</span>
            </div>
            <div id="cart-container" class="cart-container">
              <ul id="cart-list"></ul>
              <p>Total: $<span id="total-amount">0.00</span></p>
          </div>
            
            
          </div>
        </div>
      </div>

      <div class="container-navbar">
        <nav class="navbar container">
          <i class="fa-solid fa-bars" id="btn_menu" style="color: #000000"></i>

          <ul class="menu">
            <li><a href="">Inicio </a></li>
            <li><a href="#" onclick="openModal('modalProductos')">Productos</a></li>
            <li><a href="#" onclick="openModal('modalServicios')">Servicios</a></li>
            <li><a href="#" onclick="openModal('modalAcerca')"">Acerca de SESMAP</a></li>
            <li><a href="#" onclick="openModal('modalblog')"">Blog</a></li>       
            
          </ul>
          <!-- Ventana emergente para Productos -->
          <div id="modalProductos" class="modal-card">
            <h2>Productos</h2>
            <p>La maquinaria pesada es una herramienta esencial para una amplia gama 
              de industrias, desde la construcción hasta la minería. Al elegir la
               maquinaria adecuada para sus necesidades, puede aumentar la productividad,
                mejorar la eficiencia y reducir los costos.</p>
            <button onclick="closeModal('modalProductos')">Cerrar</button>
          </div>
          
          <!-- Ventana emergente para Servicios -->
          <div id="modalServicios" class="modal-card">
            <h2>Servicios</h2>
            <p>En Sesmap, entendemos que la maquinaria pesada es una inversión importante.
               Por eso, ofrecemos una amplia gama de servicios para garantizar que su 
               maquinaria funcione correctamente y cumpla con sus expectativas.</p>
            <button onclick="closeModal('modalServicios')">Cerrar</button>
          </div>
           <!-- Ventana emergente para Acerca de SESMAP -->
           <div id="modalAcerca" class="modal-card">
           <h2>Acerca de SESMAP</h2>
            <p>SESMAP es una empresa líder en el suministro de maquinaria pesada en
              Colombia. Fundada en el año 2000, la empresa se ha consolidado como un
               referente en el sector gracias a su compromiso con la excelencia
                y su servicio al cliente.</p>
            <button onclick="closeModal('modalAcerca')">Cerrar</button>
          </div>
          <!-- Ventana emergente para blog -->
          <div id="modalblog" class="modal-card">
            <h2>Blog</h2>
            <p>En los últimos años, hemos visto un aumento en la demanda de
               maquinaria pesada eléctrica y autónoma. Estas tecnologías ofrecen 
               una serie de ventajas, como la reducción de las emisiones y el 
               aumento de la seguridad.</p>
            <button onclick="closeModal('modalblog')">Cerrar</button>
          </div>      

          <form class="search-form">
            <input type="search" placeholder="Buscar..." />
            <button class="btn-search">
              <i
                class="fa-solid fa-magnifying-glass"
                style="color: #000000"
              ></i>
            </button>
          </form>
        </nav>
      </div>
    </header>

    <section class="banner">
      <div class="content-banner">
        <p>SERVICIOTECNICOSESMAP@GMAIL.COM</p>
        <h2>
          Bienvenidos a <br />
          SESMAP S.A.S
        </h2>
        <a href="#mejores-productos">Comprar</a>
      </div>
    </section>

    <main class="main-content">
      <section class="container container-features">
        <div class="card-feature">
          <i class="fa-solid fa-plane-up" style="color: #000000"></i>
          <div class="feature-content">
            <span>Envío gratuito a nivel nacional</span>
            <p>En pedido superior a</p>
          </div>
        </div>

        <div class="card-feature">
          <i class="fa-solid fa-wallet" style="color: #000000"></i>
          <div class="feature-content">
            <span>Contrareembolso</span>
            <p>100% garantía de devolución de dinero</p>
          </div>
        </div>

        <div class="card-feature">
          <i class="fa-solid fa-gift" style="color: #000000"></i>
          <div class="feature-content">
            <span>Tarjeta regalo especial</span>
            <p>Ofrece bonos especiales con regalo</p>
          </div>
        </div>

        <div class="card-feature">
          <i class="fa-solid fa-headset" style="color: #000000"></i>
          <div class="feature-content">
            <span>Servicio al cliente 24/7</span>
            <p>LLámenos 24/7 al 311-712-87-63</p>
          </div>
        </div>
      </section>

      <section id="mejores-productos" class="container top-categories">
        <h1 class="heading-1">Mejores Categorías</h1>
        <div class="container-categories">
          <div class="card-category category-repuestos">
            <p>Repuestos</p>
            <span onclick="openModal('modalcategoria1')">Ver más</span>  
          </div>
          <div id="modalcategoria1" class="modal-card">
            <h2>Repuestos</h2>
            <p>Estos son algunos de los repuestos que manejamos: <br>
              Alternador <br>
              Arranque de motor <br>
              Coupling 16AS mini <br>
              Culata 4HK1 <br>
              Polea Tensor de correa <br>
              Radiador de agua <br>
              Grasera Excavadora <br>
              Bomba Hidraulica <br>
              Cardan Join Excavadora <br>
              Motor de giro hidraulico
              </p>
            <button onclick="closeModal('modalcategoria1')">Cerrar</button>
          </div>	


          <div class="card-category category-maquinas">
            <p>Máquinas</p>
            <span onclick="openModal('modalcategoria2')">Ver más</span>
          </div>

          <div id="modalcategoria2" class="modal-card">
            <h2>Máquinas</h2>
            <p>Tenemos una gran variedad de máquinas, algunas son:<br>
              Cargadores de Ruedas pequeños <br>
              Tractores Topadores <br>
              Cargadores de Ruedas <br>
              Miniexcavadoras <br>
              Retroexcavadoras <br>
              Motoniveladoras <br>
              Excavadoras <br>
              Minicargadores

            </p>
            <button onclick="closeModal('modalcategoria2')">Cerrar</button>
          </div>	
        
          <div class="card-category category-servicios">
            <p>Servicios</p>
            <span onclick="openModal('modalcategoria3')">Ver más</span>
          </div>
          <div id="modalcategoria3" class="modal-card">
            <h2>Máquinas</h2>
            <p>Tenemos los siguientes servicios: <br>
              Mantenimiento preventivo y correctivo <br>
              Reparación de sistemas hidráulicos <br>
              Reparación tren de potencia <br>
              Diágnosticos en general <br>
              Reparación de motores <br>
              Servicio de scanner <br>
              Sistemas eléctricos <br>
              Capacitaciones
            </p>
            <button onclick="closeModal('modalcategoria3')">Cerrar</button>
          </div>	
        </div>
      </section>

      <section class="container top-productos">
        <h1 class="heading-1">Mejores Productos</h1>
        <div class="container-options">
          <span class="filter-option active" data-category="destacados">Destacados</span>
          <span class="filter-option" data-category="recientes">Más recientes</span>
          <span class="filter-option" data-category="vendidos">Mejores Vendidos</span>
     
        </div>

        <div class="container-products">
            <!-- Repuesto 1 -->
          <div class="card-product" data-category="destacados" data-product-index="0">
            <div class="container-img">
              <img src="imagenes/repuesto1.jpg" alt="repuesto uno" />
              <span class="discount">-13%</span>
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
               
                </div>
                <h3>Piñones Solares</h3>
                <div class="add-cart" onclick="addToCart(0)">
                  <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
              </div>
              <p class="price">$435.000 <span>$500.000</span></p>
            </div>
          </div>
          <!-- Repuesto 2 -->
          <div class="card-product" data-category="destacados" data-product-index="1">
            <div class="container-img">
              <img src="imagenes/repuesto2.jpg" alt="repuesto dos" />
              <span class="discount">-22%</span>
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Engranajes</h3>
                <span class="add-cart"onclick="addToCart(1)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$682.500 <span>$875.000</span></p>
                </span>
            </div>
          </div>
           <!-- Repuesto 3 -->
           <div class="card-product"  data-category="destacados" data-product-index="2">
            <div class="container-img">
              <img src="imagenes/repuesto3.jpeg" alt="repuesto tres" />
              <span class="discount">-30%</span>
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Cilindro</h3>
                <span class="add-cart"  onclick="addToCart(2)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$693.000 <span>$990.000</span></p>
                </span>
            </div>
          </div>
           <!-- Repuesto 4 -->
           <div class="card-product"  data-category="destacados" data-product-index="3">
            <div class="container-img">
              <img src="imagenes/repuesto4.jpg" alt="repuesto cuatro" />
             
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Cojinetes de biela</h3>
                <span class="add-cart"  onclick="addToCart(3)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$200.000 </p>
                
            </div>
          </div>

          <!-- Repuesto 5 -->
          <div class="card-product"  data-category="recientes" data-product-index="4">
            <div class="container-img">
              <img src="imagenes/repuesto6.jpg" alt="repuesto cuatro" />
             
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                     <i class="fa-solid fa-star" style="color: #000000;"></i>
                      <i class="fa-solid fa-star" style="color: #000000;"></i>
                </div>
                <h3>Alternador</h3>
                <span class="add-cart" onclick="addToCart(4)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$500.000</p>
                
            </div>
          </div>

          <!-- Repuesto 6 -->
          <div class="card-product"  data-category="recientes" data-product-index="5">
            <div class="container-img">
              <img src="imagenes/repuesto7.jpg" alt="repuesto cuatro" />
             
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Arranque de motor </h3>
                <span class="add-cart"  onclick="addToCart(5)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$250.000 </p>
                
            </div>
          </div>
          <!-- Repuesto 7 -->
          <div class="card-product"  data-category="recientes" data-product-index="6">
            <div class="container-img">
              <img src="imagenes/repuesto8.jpg" alt="repuesto cuatro" />
             
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Coupling 16AS mini</h3>
                <span class="add-cart"  onclick="addToCart(6)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$465.000 </p>
                
            </div>
          </div>
          <!-- Repuesto 8 -->
          <div class="card-product" data-category="recientes" data-product-index="7">
            <div class="container-img">
              <img src="imagenes/repuesto9.jpg" alt="repuesto dos" />
              <span class="discount">-15%</span>
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Culata 4HK1</h3>
                <span class="add-cart" onclick="addToCart(7)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$680.000 <span>$800.000</span></p>
                </span>
            </div>
          </div>

           <!-- Repuesto 9 -->
           <div class="card-product" data-category="vendidos" data-product-index="8">
            <div class="container-img">
              <img src="imagenes/repuesto10.jpg" alt="repuesto dos" />
              <span class="discount">-10%</span>
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                </div>
                <h3>Polea Tensor de correa</h3>
                <span class="add-cart" onclick="addToCart(8)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$90,000 <span>$100.000</span></p>
                </span>
            </div>
          </div>
           <!-- Repuesto 10-->
           <div class="card-product" data-category="vendidos" data-product-index="9">
            <div class="container-img">
              <img src="imagenes/repuesto11.jpg" alt="repuesto dos" />
              <span class="discount">-20%</span>
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Radiador de agua</h3>
                <span class="add-cart"  onclick="addToCart(9)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price">$160.000 <span>$200.000</span></p>
                </span>
            </div>
          </div>
           <!-- Repuesto 11 -->
           <div class="card-product"  data-category="vendidos" data-product-index="10">
            <div class="container-img">
              <img src="imagenes/repuesto12.jpg" alt="repuesto cuatro" />
             
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                     <i class="fa-solid fa-star" style="color: #000000;"></i>
                     <i class="fa-solid fa-star" style="color: #000000;"></i>
                </div>
                <h3>Bomba Hidraulica</h3>
                <span class="add-cart" onclick="addToCart(10)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price"> $900.000 </p>
                
            </div>
          </div>
           <!-- Repuesto 12 -->
           <div class="card-product"  data-category="vendidos" data-product-index="11">
            <div class="container-img">
              <img src="imagenes/repuesto13.webp" alt="repuesto cuatro" />
             
              <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-regular fa-heart" style="color: #000000;"></i>
                </span>

                <span>
                    <i class="fa-solid fa-code-compare" style="color: #000000;"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-solid fa-star" style="color: #000000;"></i>
                    <i class="fa-regular fa-star" style="color: #000000;"></i>
                </div>
                <h3>Motor de giro hidraulico</h3>
                <span class="add-cart" onclick="addToCart(11)">
                    <i class="fa-solid fa-basket-shopping" style="color: #000000;"></i>
                </span>
                <p class="price"> $890.000 </p>
                
            </div>
          </div>

        </div>
      </section>

      <section class="gallery">
        <img src="imagenes/maquina7.jpg" alt="maquina img1" class="gallery-img-1">
        <img src="imagenes/maquina12.jpg" alt="maquina img2" class="gallery-img-2">
        <img src="imagenes/maquina6.jpg" alt="maquina img3" class="gallery-img-3">
        <img src="imagenes/maquina9.jpeg" alt="maquina img4" class="gallery-img-4">
        <img src="imagenes/maquina5.jpg" alt="maquina img5" class="gallery-img-5">
      </section>

      <section class="container specials">
        <h1 class="heading-1">Servicios Especiales</h1>
        <div class="container-products">
          <div class="container-products">
            <!-- Servicio 1 -->
            <div class="card-product">
              <div class="container-img">
                <img src="imagenes/tecnico4.jpg" alt="servicio dos" />
                <div class="content-blog"> 
                  <h3>Reparación de Motores</h3>
                  <span>Sesmap S.A.S</span></div>    
                  <p>Los motores de maquinaria pesada son motores Diesel de  gran cilindrada que operan en 
                    condiciones exigentes. Por lo tanto, son susceptibles a fallas y averías. Contamos con un equipo 
                    de técnicos altamente calificados y un taller equipado con la última tecnología.</p>
                  <div class="btn-read-more" onclick="openModal('modalmotor')" >Leer más</div>
                <div id="modalmotor" class="modal-card">
                  <h2>Más</h2>
                  <p>Podemos reparar todo tipo de motores de maquinaria 
                    pesada, incluidos: <br>
                    Excavadora <br>
                    Grúa<br>
                    Retroexcavadora<br>
                    Motoniveladora <br>
                    Tractor <br>
                    Camión <br>
                    Costo: $8.700.000
                    </p>
                  <button onclick="closeModal('modalmotor')">Cerrar</button>
                </div>
              </div>
            </div>
          <!-- servicio 2 -->
          <div class="card-product">
            <div class="container-img">
              <img src="imagenes/tecnico5.jpg" alt="servicio dos" />
              <div class="content-blog"> 
                <h3>Sistemas Eléctricos</h3>
              	<span>Sesmap S.A.S</span></div>   
                <p>Hoy en día, SESMAP ofrece una amplia gama de repuestos de maquinaria 
                  pesada, así como mantenimientos preventivos y correctivos y 
                  capacitación. La empresa tiene una red de centros de servicio en
                   todo el país donde opera y presta los mejores servicios.
                  </p> <div class="btn-read-more" onclick="openModal('modalelectrico')" >Leer más</div>
              <div id="modalelectrico" class="modal-card">
                <h2>Más</h2>
                <p>La reparación en sistemas eléctricos puede ser un proceso complejo,
                  que requiere conocimientos y experiencia especializados. Por lo general,
                   es realizada por técnicos o ingenieros eléctricos calificados.
                  Algunas de las tareas que se pueden realizar en la reparación 
                  de sistemas eléctricos incluyen:     <br>              
                  Diagnóstico del problema<br> 
                  Limpieza y desmontaje del sistema<br> 
                  Reparación o reemplazo de componentes defectuosos <br> 
                  Montaje del sistema<br> 
                  Pruebas y verificación del funcionamiento <br> 
                  Costo: $5.000.000
                  </p>
                <button onclick="closeModal('modalelectrico')">Cerrar</button>
              </div>
            </div>
          </div>
           <!-- servicio 3 -->
           <div class="card-product">
            <div class="container-img">
              <img src="imagenes/tecnico6.png" alt="servicio dos" />
              <div class="content-blog"> 
                <h3>Reparación tren de potencia</h3>
              	<span>Sesmap S.A.S</span></div>    
                <p>Expertos en reparación de tren de potencia de maquinaria pesada, es el conjunto
                   de componentes que transmiten la potencia del motor a las ruedas. Está compuesto 
                   por el motor, la caja de cambios, el eje de transmisión y los diferenciales importantes.</p>
                <div class="btn-read-more" onclick="openModal('modaltren')" >Leer más</div>
              <div id="modaltren" class="modal-card">
                <h2>Más</h2>
                <p>Si su tren de potencia de maquinaria pesada presenta 
                  alguno de los siguientes síntomas, es importante que lo lleve a un taller especializado para su reparación: <br>
                  Ruidos anormales: El tren de potencia puede emitir ruidos anormales, como golpes, chirridos o zumbidos. <br>
                  Falta de potencia: El tren de potencia puede perder potencia o velocidad. <br>
                  Problemas de conducción: El tren de potencia puede causar problemas de conducción, como vibraciones, deslizamiento o dificultad para arrancar.  <br>
                  Costo: $9.080.000 
                  </p>
                <button onclick="closeModal('modaltren')">Cerrar</button>
              </div>
            </div>
          </div>
           <!-- servicio 4 -->
           <div class="card-product">
            <div class="container-img">
              <img src="imagenes/tecnico7.jpg" alt="servicio dos" />
              <div class="content-blog"> 
                <h3>Reparación de Sistemas hidráulicos</h3>
              	<span>Sesmap S.A.S</span></div>    
                <p>Los sistemas hidráulicos son esenciales para el funcionamiento de la maquinaria pesada. 
                  Estos sistemas utilizan fluidos a presión para mover los componentes de la máquina,
                   lo que les permite realizar tareas complejas y cumplir con los objetivos establecidos en la empresa.
                  <div class="btn-read-more" onclick="openModal('modalhidraulico')" >Leer más</div>
              <div id="modalhidraulico" class="modal-card">
                <h2>Más</h2>
                <p> Si su sistema hidráulico de maquinaria pesada presenta alguno de los siguientes síntomas,
                   es importante que lo lleve a un taller especializado para su reparación: <br>
                  Fugas: El sistema hidráulico puede perder fluidos a presión a través de fugas. <br>
                  Ruidos anormales: El sistema hidráulico puede emitir ruidos anormales, como golpes, chirridos o zumbidos.<br>
                  Disminución del rendimiento: El sistema hidráulico puede perder potencia o velocidad. <br>
                  Dificultad para operar: El sistema hidráulico puede causar problemas al operar la máquina, como vibraciones, deslizamiento 
                  o dificultad para arrancar.<br>
                  Costo: $5.500.000
                  </p>
                <button onclick="closeModal('modalhidraulico')">Cerrar</button>
              </div>
            </div>
          </div>
      </section>

      <section class="container blogs">
        <h1 class="heading-1">Últimos Blogs</h1>

				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img src="imagenes/fondo1.jpg" alt="Imagen Blog 1" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
								</span>
								<span>
									<i class="fa-solid fa-link" style="color: #000000;"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Una empresa con más de 23 años de historia.</h3>
							<span>2 Julio 2023</span>
							<p> Fundada en el año 2000, la empresa se ha consolidado
                 como un referente en el sector gracias a su compromiso con la 
                 excelencia y su servicio al cliente,gracias a sus mantenimientos preventivoy correctivos.
							</p>
							<div class="btn-read-more" onclick="openModal('modal1')" >Leer más</div>
              <div id="modal1" class="modal-card">
                <h2>Más</h2>
                <p>Hoy en día, SESMAP ofrece una amplia gama de repuestos de maquinaria
                   pesada, así como mantenimientos preventivos y correctivos y capacitación. 
                   La empresa tiene una red de centros de servicio en todo el país.</p>
                <button onclick="closeModal('modal1')">Cerrar</button>
              </div>
						</div>
					</div>

					<div class="card-blog">
						<div class="container-img">
							<img src="imagenes/fondo2.jpg" alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Una empresa comprometida con la excelencia.</h3>
							<span>29 de julio de 2023</span>
							<p>
								En SESMAP, estamos comprometidos con la excelencia en todo 
                lo que hacemos.
                Nos esforzamos por ofrecer a nuestros clientes los mejores productos
                 y servicios posibles, así como un servicio al cliente excepcional.
							</p>
							<div class="btn-read-more" onclick="openModal('modal2')" >Leer más</div>
              <div id="modal2" class="modal-card">
                <h2>Más</h2>
                <p>Todos nuestros productos están fabricados con los más altos estándares
                   de calidad y están respaldados por una garantía.
                  Nuestros empleados están constantemente recibiendo formación para mantenerse
                   al día de las últimas tendencias..</p>
                <button onclick="closeModal('modal2')">Cerrar</button>
              </div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="imagenes/fondo3.jpg" alt="Imagen Blog 3" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Una empresa con visión de futuro.</h3>
							<span>26 de Diciembre de 2023</span>
							<p>
                En SESMAP, estamos siempre mirando al futuro. Nos esforzamos por 
                estar a la vanguardia de las últimas tendencias en maquinaria pesada.
                La empresa dedica una parte importante de sus recursos a la
                 investigación y el desarrollo de nuevas tecnologías.
							</p>
							<div class="btn-read-more" onclick="openModal('modal3')">Leer más</div>
              <div id="modal3" class="modal-card">
                <h2>Más</h2>
                <p>La empresa trabaja en colaboración con universidades y centros 
                  tecnológicos para desarrollar nuevas soluciones,También asiste a 
                  eventos y congresos del sector para conocer las últimas tendencias.</p>
                <button onclick="closeModal('modal3')">Cerrar</button>
              </div>						   
            </div>
					</div>
				</div>
      </section>
    </main>

    <footer class="footer">
      <div class="container container-footer">
        <div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: Belén-Medellín
							</li>
							<li>Teléfono: 311-712-87-63</li>
							<li>Fax: 604-444-65-66</li>
							<li>EmaiL: SERVICIOTECNICOSESMAP@GMAIL.COM</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
                <a href="https://www.facebook.com/groups/590545282619107/?ref=share&mibextid=tfI6NJ" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </span>
            
            <span class="twitter">
              <a href="https://twitter.com/CaterpillarInc?t=FpNJYIX4x2HKLcbjT8mKpA&s=09" target="_blank">
                  <i class="fa-brands fa-x-twitter"></i>
              </a>
          </span>

							<span class="youtube">
                <a href="https://www.youtube.com/watch?v=IzJxwYfgVpc" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </span>
            

            <span class="instagram">
              <a href="https://instagram.com/maquinariapesadabaq?igshid=MWZob28wd2h1N2pmOA==" target="_blank">
                  <i class="fa-brands fa-instagram"></i>
              </a>
          </span>
          
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="#information" onclick="openModal('modalnosotros')">Acerca de Nosotros</a></li>
							<li><a href="#information" onclick="openModal('modalprivacidad')">Políticas de Privacidad</a></li>
							<li><a href="#information" onclick="openModal('modalterminos')">Términos y condiciones</a></li>
							<li><a href="#information" onclick="openModal('modalcontacto')">Contactános</a></li>
						</ul>
					</div>
          <div id="modalnosotros" class="modal-card">
            <h2>Acerca de Nosotros</h2> <style>p {font-size: 1.5rem;}</style>
            <p>Fundada en el año 2000, SESMAP es una empresa líder en mantenimientos
              preventivos y correctivos de maquinaria pesada en Colombia.
               Ofrecemos una amplia gama de productos y 
               servicios, incluyendo: <br>
              Diagnósticos en general <br>
            Reparación de motores <br>
          Sistemas eléctricos</p>
            <button onclick="closeModal('modalnosotros')">Cerrar</button>
          </div>
          <div id="modalprivacidad" class="modal-card">
            <h2>Políticas de Privacidad</h2>
            <p>SESMAP respeta la privacidad de sus clientes.
               Nuestra Política de Privacidad explica cómo recopilamos, 
               usamos y compartimos la información personal de nuestros clientes.</p>
            <button onclick="closeModal('modalprivacidad')">Cerrar</button>
          </div>
          <div id="modalterminos" class="modal-card">
            <h2>Términos y condiciones</h2>
            <p>Los Términos y condiciones de SESMAP rigen el uso de nuestro 
              sitio web y nuestros servicios.</p>
            <button onclick="closeModal('modalterminos')">Cerrar</button>
          </div>
          <div id="modalcontacto" class="modal-card">
            <h2>Contáctanos</h2>
            <p>Si tiene alguna pregunta o inquietud, no dude en ponerse en contacto con nosotros.
<br>
              Puede ponerse en contacto con nosotros por correo 
              electrónico a SERVICIOTECNICOSESMAP@GMAIL.COM
               o por teléfono al 311 712 87 63.</p>
            <button onclick="closeModal('modalcontacto')">Cerrar</button>
          </div>


					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><P>Mi cuenta</P>
                <li><p>Historial de ordenes</p></li>
                <li><p>Lista de deseos</p></li>
                <li><p>Boletín</p></li>
                <li><p>Reembolsos</p></li>
							
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
              <h1 class="mt-3 text-center">Formulario de contacto</h1>							
              <form action="https://formsubmit.co/susa.rod.12@gmail.com" method="POST">
               
                <div class="mb-3">
                  <input
                    type="nombre"
                    class="form-control"
                    id="subject"
                    placeholder="Nombre Completo"
                    name="Nombre"
                  />
                </div>
        
                <div class="mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Correo"
                    name="Correo"
                  />
                </div>

                <div class="mb-3">
                  <input
                    type="message"
                    class="form-control"
                    id="message"
                    placeholder="Mensaje"
                    name="Mensaje"
                  />
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
           </form>
            </div>

					</div>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por Susana Rodríguez &copy; 2023
					</p>

					<img src="imagenes/payment.png" alt="Pagos">
      </div>
    </footer>
    
    <script src="ventana.js"></script>
    <script
      src="https://kit.fontawesome.com/81581fb069.js"
      crossorigin="anonymous"
    ></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
<script src="clasificacion.js"></script>
<script src="responsivo.js"></script>
<script src="carrito.js"></script>
   
  </body>
 
</html>
