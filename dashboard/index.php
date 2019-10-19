<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project AEDES</title>
    <link rel="stylesheet" href="bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/05a7e6096a.js" crossorigin="anonymous"></script> -->
    <script src='maps/mapbox-gl.js'></script>
    <link href='maps/mapbox-gl.css' rel='stylesheet' />
    <style>
      .sticky	{
        position: sticky;
          top: 3.25rem;
      }

    </style>
  </head>
    <header class="">
      <div class="">
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a href="" class="navbar-item is--brand">
            <img class="navbar-brand-logo" src="assets/logo4.png" title="" style="">
            </a>
            <a class="navbar-item is-tab is-hidden-mobile is-active"><span class="icon is-medium"><i class="fa fa-bullseye"></i></span>AEDES Project</a>
          </div>
          <div class="navbar-menu navbar-end" id="navMenu">
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                <figure class="image is-32x32" style="margin-right:.5em"><i class="fa fa-user"></i></figure>
                LGU
              </a>
              <div class="navbar-dropdown is-right">
                <a class="navbar-item"><span class="icon is-small"><i class="fa fa-user-o"></i> </span>&nbsp; Profile</a>
                <hr class="navbar-divider">
                <a class="navbar-item"><span class="icon is-small"><i class="fa fa-power-off"></i> </span>&nbsp; Logout</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <body class="has-navbar-fixed-top">
      <div class="wrapper">
        <div class="columns">
          <aside class="column is-2 aside ">
            <nav class="menu sticky">
              <p class="menu-label">Home</p>
              <ul class="menu-list">
                <li><a id="project" class="is-active" href="#">
                  <span class="icon is-small"><i class="fa fa-info-circle"></i></span> What is Project AEDES?</a>
                  <ul id="project_list" class="menu-list">                    
                    <li><a class="" href="#aedes_1">AEDES Project</a></li>
                    <li><a class="" href="#aedes_2">Our Challenge</a></li>
                    <li><a class="" href="#aedes_3">The Problem</a></li>
                    <li><a class="" href="#aedes_4">Our Solution</a></li>
                    <li><a class="" href="#aedes_5">Correlating: Dengue Cases and Deaths</a></li>
                    <li><a class="" href="#aedes_6">Related Literature</a></li>
                    <li><a class="" href="#aedes_7">Objectives and Principles</a></li>
                  </ul>
                </li>
              </ul>
              <p class="menu-label">Dashboard</p>
                <ul class="menu-list">
                  <li><a id="dashboard" class="" href="#"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Dashboard</a></li>
                </ul>
              <p class="menu-label">Research</p>
                <ul class="menu-list">
                  <li><a id="search" class="" href="#"><span class="icon is-small"><i class="fa fa-search"></i></span> Search</a></li>
                  <li><a id="models" class="" href="#"><span class="icon is-small"><i class="fa fa-cogs"></i></span> Models</a></li>
                  <li><a id="mapping" class="" href="#"><span class="icon is-small"><i class="fa fa-map-marker"></i></span> Mapping</a></li>
                </ul>
              <p class="menu-label">References</p>
                <ul class="menu-list">
                  <li><a id="github" class="" href="#"><span class="icon is-small"><i class="fa fa-github"></i></span> Github Link</a></li>
                  <li><a id="presentation" class="" href="#">
                    <span class="icon is-small"><i class="fa fa-file-powerpoint-o"></i></span> Presentation</a>
                  </li>
                </ul>
              <p class="menu-label">About The Authors</p>
                <ul class="menu-list">
                  <li><a id="authors" class="" href="#"><span class="icon is-small"><i class="fa fa-user"></i></span> Authors</a></li>
                </ul>
            </nav>
          </aside>
          <main class="column main ">
            <!-- <section class="">
              <div class="level">
                <div class="level-left">
                  <div class="level-item">
                    <div class="title has-text-black container">
                      <i id="mainTitle" class="fa fa-tachometer"></i> AEDES Project
                    </div>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <button type="button" class="button is-small">March 8, 2017 - April 6, 2017</button>
                  </div>
                </div>
              </div> -->
              <div id="page_0" class="columns is-multiline">
                <span id="aedes_1"></span>
                <div class="column is-full">
                  <section class="hero">
                    <div class="hero-body">
                      <div class="container">
                        <h1 class="title is-2">
                          <i class="fa fa-bullseye"></i> AEDES Project
                        </h1>
                        <!-- <h2 class="subtitle">
                        </h2> -->
                        <article class="message">
                          <div class="message-header">
                            <p>Advanced Early Dengue Prediction and Exploration Service (AEDES)</p>
                          </div>
                          <div class="message-body">
                            AEDES aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data.
                          </div>
                        </article>
                        <figure class="image">
                          <img src="slides/Slide1.PNG">
                        </figure>
                        <span id="aedes_2"></span>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Our Challenge
                          </h2>
                          <h2 class="block">
                            AEDES is tackling the SMASH YOUR SDGs challenge under the LIVING IN OUR WORLD category. Specifically we are tackling Goal 3: GOOD HEALTH AND WELL BEING under the UN Sustainable Development Goals. 
                          </h2>
                          <div class="block">
                            <div class="columns">
                              <div class="column is-one-third">
                                <figure class="image is-square">
                                  <img src="assets/living.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-square">
                                  <img src="assets/sdgs.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-square">
                                  <img src="assets/health.PNG">
                                </figure>
                              </div>
                            </div>
                          </div>
                        </section>
                        <span id="aedes_3"></span>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            The Problem
                          </h2>
                          <h2 class="block">
                            <div class="columns ">
                              <div class="column is-half">
                                <h1 class="title is-1 has-text-centered">
                                  1,107
                                </h1>
                                <h2 class="subtitle has-text-centered">
                                  Deaths
                                </h2>
                              </div>
                              <div class="column is-half">
                                <h1 class="title is-1 has-text-centered">
                                  271,000+
                                </h1>
                                <h2 class="subtitle has-text-centered">
                                  Cases
                                </h2>
                              </div>
                            </div>
                          </h2>
                          <div class="block">
                            <div class="columns">
                              <div class="column is-one-third">
                                <figure class="image is-5by3">
                                  <img src="assets/problem1.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-5by3">
                                  <img src="assets/problem2.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-5by3">
                                  <img src="assets/problem3.PNG">
                                </figure>
                              </div>
                            </div>
                          </div>
                          <div class="block">
                            <h1 class="subtitle is-7">Source: Department of Health - as of August 2019</h1>
                          </div>
                          <div class="block">
                            <div class="columns">
                              <div class="column is-one-third has-text-centered">
                                <h2 class="subtitle  is-3 has-text-centered">
                                  Reporting is manual and dengue data is delayed.
                                </h2>
                              </div>
                              <div class="column is-one-third has-text-centered">
                                <h2 class="subtitle  is-3 has-text-centered">
                                  Public Health Sector’s resources are limited. 
                                </h2>
                              </div>
                              <div class="column is-one-third has-text-centered">
                                <h2 class="subtitle  is-3 has-text-centered">
                                  We need to move the emphasis from treatment to prevention. 
                                </h2>
                              </div>
                            </div>
                          </div>
                          <span id="aedes_4"></span>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Our Solution: Advanced Dengue Prediction
                          </h2>
                          <h2 class="block">
                            <h2 class="subtitle is-4">
                              Correlate dengue cases and deaths with real-time data from climate, google searches, and satellite maps, giving an advance indicator of when dengue will emerge and potential dengue hotspot locations. 
                            </h2>


                            <div class="block">
                              <div class="columns">
                                <div class="column is-one-third">
                                  <figure class="image is-5by3">
                                    <img src="assets/solution1.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-5by3">
                                    <img src="assets/solution2.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-5by3">
                                    <img src="assets/solution3.PNG">
                                  </figure>
                                </div>
                              </div>
                            </div>

                            The service relies on 3 data sets:
                            <div class="content">
                              <ol type="i">
                                <li>Climate data from DOST-PAGASA</li>
                                <li>Google searches for 'dengue' and related terms</li>
                                <li>Satellite imaging data from NASA Landsat (Copernicus)</li>
                              </ol>
                            </div>

                            To populate the information portal, we propose 3 models: 
                            <div class="content">
                              <ol type="i">
                                <li>Predict dengue cases from climate and search data</li>
                                <li>Predict dengue deaths from dengue cases</li>
                                <li>Determine likely dengue hotspots by detecting stagnant water areas from satellite data</li>
                              </ol>
                            </div>

                            By doing this we are addressing 2 key challenges for public health and local government officials: 
                            <div class="content">
                              <ol type="1">
                                <li>Get ahead of the lagged delay of dengue reporting by using real-time information (e.g. climate, searches) to infer if dengue cases and deaths are about to spike. </li>
                                <li>Precisely anticipate areas that may be affected by dengue to prioritize health aid, supplies, and proactive fumigation to prevent the outbreaks. </li>
                              </ol>
                            </div>
                          </h2>
                        </section>
                        <span id="aedes_5"></span>
                        <hr>
                        <section class="block">
                          <div class="block">
                            <figure class="image">
                              <img src="assets/denguecycle.jpg" alt="">
                            </figure>
                          </div>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Searches for Dengue: Epidemic of Panic
                          </h2>
                          <div class="block">
                            <figure class="image">
                              <img src="assets/denguesearches.jpg" alt="">
                            </figure>
                          </div>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Correlating: Dengue Cases and Deaths
                          </h2>
                          <div class="block">
                            Test
                          </div>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Finding Mosquito Hotpots From Satellite Images
                          </h2>
                          <div class="block">
                            Test
                          </div>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Related Literature
                          </h2>
                          <div class="block">
                              <div class="columns">
                                <div class="column is-one-third">
                                  <figure class="image is-square">
                                    <img src="assets/literature1.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-square">
                                    <img src="assets/literature2.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-square">
                                    <img src="assets/literature3.PNG">
                                  </figure>
                                </div>
                              </div>
                            </div>
                          <h2 class="block">
                            We have conducted research and cite the following prior work that provide the foundation for this solution: 
                            <div class="content">
                              <ol type="i">
                                <li>In Caro, et. al. (2016), "Forecasting and Data Visualization of Dengue spread in the Philippine Visayas Island group", researchers proposed a method to predict dengue cases in the Visayas regions through the use of an Artificial Neural Network (ANN) which predicted dengue cases (R 0.8) through the use of climate data (temperature and rainfall) and a lagged number of previous dengue cases. </li>
                                <li>In Yang, et. al. (2016), "Advances in using Internet searches to track dengue", researchers used Google searches for 'dengue' and related keywords to predict dengue cases in Mexico, Brazil, Thailand, Singapore and Taiwan. </li>
                                <li>In Chua, Tan, et. al. (2018), "Project Project Still Water", researchers proposed a methodology to detect dengue hotspots using FAPAR (Vegetation) and NDWI (Water) areas. </li>
                                <li>In Chan, Johnson (2012), "The Incubation Periods of Dengue Viruses", researchers establish the incubation periods for dengue. 95% of EIPs are between 5 and 33 days at 25C, and 2 and 15 days at30C, with means of 15 and 6.5 days, respectively which suggests that climate has an effect on the incubation of the disease. </li>
                              </ol>
                            </div>
                          </h2>
                        </section>
                        <span id="aedes_6"></span>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Objectives and Principles
                          </h2>
                          <h2 class="block">
                            Our proposed solution intends to builds on this work by the following principles: 

                            <div class="content">
                              <ol type="i">
                                <li>We test and propose independent and mixed models that combine Google searches and climate data to detect possible factors that affect dengue cases and deaths as well as provide an accurate forecast.</li>
                                <li>We provide the information on an easily navigable interactive web application accessible by the public to help disseminate crucial information and also assist in public health efforts to prevent and contain the disease.</li>
                              </ol>
                            </div>

                            Logically, the behavior captured by the datasets in our study is:
                            <div class="content">
                              <ol type="1">
                                <li>First, precipitation and temperature climate creates mosquito-breeding environments</li>
                                <li>Mosquitoes spread and get infected by existing dengue cases, thereby spreading the disease</li>
                                <li>New infections cause alarm which drives internet searches for dengue</li>
                                <li>Dengue cases result in deaths</li>
                                <li>Cases and deaths are reported to public health officials </li>
                              </ol>
                            </div>

                            <div class="block">
                              Therefore by detecting #1 and #3 we can address and hopefully disrupt the disease cycle before an epidemic spreads. 
                            </div>

                          </h2>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Our Impact
                          </h2>
                          <div class="block">
                          <div class="columns ">
                            <div class="column is-half">
                              <figure class="image">
                                <img src="assets/ourimpact.jpg" alt="">
                              </figure>
                            </div>
                            <div class="column is-half">
                              <h1 class="title is-2 has-text-centered">
                                For every single day we can reduce the lag in response time we save: 
                              </h1>
                              <div class="columns">
                                <div class="column is-half">
                                  <h2 class="title is-1 has-text-centered">
                                    5
                                  </h2>
                                  <h2 class="subtitle is-3 has-text-centered">
                                    Lives
                                  </h2>
                                </div>
                                <div class="column is-half">
                                  <h2 class="title is-1 has-text-centered">
                                    1,130
                                  </h2>
                                  <h2 class="subtitle is-3 has-text-centered">
                                    New Cases
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                         </div>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Next Steps
                          </h2>
                          <div class="block">
                            <div class="content">
                              <ol type="1">
                                <li class="subtitle is-3">Complete time-series training for all regions</li>
                                <li class="subtitle is-3">Add satellite data for all target regions</li>
                                <li class="subtitle is-3">Recommend target areas for on the ground dengue case and deaths monitoring</li>
                                <li class="subtitle is-3">Set future thresholds for dengue epidemics and short list areas that will be hit first</li>
                              </ol>
                            </div>
                          </div>
                        </section>
                        <hr>
                        <section class="block">
                          <div class="block">
                            <figure class="image">
                              <img src="slides/Slide10.png" alt="">
                            </figure>
                          </div>
                        </section>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="page_1" class="columns is-multiline">
                <div class="column">
                  <div class="box notification is-primary">
                    <div class="heading">Top Seller Total</div>
                    <div class="title">56,950</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Sales $</div>
                          <div class="title is-5">250K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Overall $</div>
                          <div class="title is-5">750K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Sales %</div>
                          <div class="title is-5">25%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="box notification is-warning">
                    <div class="heading">Revenue / Expenses</div>
                    <div class="title">55% / 45%</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Rev Prod $</div>
                          <div class="title is-5">30%</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Rev Serv $</div>
                          <div class="title is-5">25%</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Exp %</div>
                          <div class="title is-5">45%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="box notification is-info">
                    <div class="heading">Feedback Activity</div>
                    <div class="title">78% ↑</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Pos</div>
                          <div class="title is-5">1560</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Neg</div>
                          <div class="title is-5">368</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Pos/Neg %</div>
                          <div class="title is-5">77% / 23%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="box notification is-danger">
                    <div class="heading">Orders / Returns</div>
                    <div class="title">75% / 25%</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Orders $</div>
                          <div class="title is-5">425K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Returns $</div>
                          <div class="title is-5">106K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Success %</div>
                          <div class="title is-5">+ 28,5%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="page_2" class="columns is-multiline">
                <div class="column is-full">
                  <div class="container">
                    <h1 class="title is-2">
                      Mapping
                    </h1>
                  </div>
                </div>
                <div class="column is-full">
                  <article class="message is-dark">
                    <div class="message-header">Quezon City</div>
                    <div class="message-body">
                      <div id='map3' style='height: 400px;'></div>
                      <div id='marker3'></div>
                    </div>
                  </article>
                </div>
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Iloilo</div>
                    <div class="message-body">
                      <div id='map2' style='height: 400px;'></div>
                      <div id='marker2'></div>
                    </div>
                  </article>
                </div>
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Dagupan</div>
                    <div class="message-body">
                      <div id='map6' style='height: 400px;'></div>
                      <div id='marker6'></div>
                    </div>
                  </article>
                </div>
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Tacloban</div>
                    <div class="message-body">
                      <div id='map4' style='height: 400px;'></div>
                      <div id='marker4'></div>
                    </div>
                  </article>
                </div>
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Cotabato</div>
                    <div class="message-body">
                      <div id='map5' style='height: 400px;'></div>
                      <div id='marker5'></div>
                    </div>
                  </article>
                </div>
              </div>
              <div id="page_3" class="columns is-multiline">
                <div class="field has-addons">
                  <div class="control">
                    <input class="input" type="text" placeholder="Find a repository">
                  </div>
                  <div class="control">
                    <a class="button is-info">
                      Search
                    </a>
                  </div>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th><abbr title="Position">Pos</abbr></th>
                      <th>Team</th>
                      <th><abbr title="Played">Pld</abbr></th>
                      <th><abbr title="Won">W</abbr></th>
                      <th><abbr title="Drawn">D</abbr></th>
                      <th><abbr title="Lost">L</abbr></th>
                      <th><abbr title="Goals for">GF</abbr></th>
                      <th><abbr title="Goals against">GA</abbr></th>
                      <th><abbr title="Goal difference">GD</abbr></th>
                      <th><abbr title="Points">Pts</abbr></th>
                      <th>Qualification or relegation</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><abbr title="Position">Pos</abbr></th>
                      <th>Team</th>
                      <th><abbr title="Played">Pld</abbr></th>
                      <th><abbr title="Won">W</abbr></th>
                      <th><abbr title="Drawn">D</abbr></th>
                      <th><abbr title="Lost">L</abbr></th>
                      <th><abbr title="Goals for">GF</abbr></th>
                      <th><abbr title="Goals against">GA</abbr></th>
                      <th><abbr title="Goal difference">GD</abbr></th>
                      <th><abbr title="Points">Pts</abbr></th>
                      <th>Qualification or relegation</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
                      </td>
                      <td>38</td>
                      <td>23</td>
                      <td>12</td>
                      <td>3</td>
                      <td>68</td>
                      <td>36</td>
                      <td>+32</td>
                      <td>81</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td><a href="https://en.wikipedia.org/wiki/Arsenal_F.C." title="Arsenal F.C.">Arsenal</a></td>
                      <td>38</td>
                      <td>20</td>
                      <td>11</td>
                      <td>7</td>
                      <td>65</td>
                      <td>36</td>
                      <td>+29</td>
                      <td>71</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td><a href="https://en.wikipedia.org/wiki/Tottenham_Hotspur_F.C." title="Tottenham Hotspur F.C.">Tottenham Hotspur</a></td>
                      <td>38</td>
                      <td>19</td>
                      <td>13</td>
                      <td>6</td>
                      <td>69</td>
                      <td>35</td>
                      <td>+34</td>
                      <td>70</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr class="is-selected">
                      <th>4</th>
                      <td><a href="https://en.wikipedia.org/wiki/Manchester_City_F.C." title="Manchester City F.C.">Manchester City</a></td>
                      <td>38</td>
                      <td>19</td>
                      <td>9</td>
                      <td>10</td>
                      <td>71</td>
                      <td>41</td>
                      <td>+30</td>
                      <td>66</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Play-off_round" title="2016–17 UEFA Champions League">Champions League play-off round</a></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td><a href="https://en.wikipedia.org/wiki/Manchester_United_F.C." title="Manchester United F.C.">Manchester United</a></td>
                      <td>38</td>
                      <td>19</td>
                      <td>9</td>
                      <td>10</td>
                      <td>49</td>
                      <td>35</td>
                      <td>+14</td>
                      <td>66</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Group_stage" title="2016–17 UEFA Europa League">Europa League group stage</a></td>
                    </tr>
                    <tr>
                      <th>6</th>
                      <td><a href="https://en.wikipedia.org/wiki/Southampton_F.C." title="Southampton F.C.">Southampton</a></td>
                      <td>38</td>
                      <td>18</td>
                      <td>9</td>
                      <td>11</td>
                      <td>59</td>
                      <td>41</td>
                      <td>+18</td>
                      <td>63</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Group_stage" title="2016–17 UEFA Europa League">Europa League group stage</a></td>
                    </tr>
                    <tr>
                      <th>7</th>
                      <td><a href="https://en.wikipedia.org/wiki/West_Ham_United_F.C." title="West Ham United F.C.">West Ham United</a></td>
                      <td>38</td>
                      <td>16</td>
                      <td>14</td>
                      <td>8</td>
                      <td>65</td>
                      <td>51</td>
                      <td>+14</td>
                      <td>62</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Third_qualifying_round" title="2016–17 UEFA Europa League">Europa League third qualifying round</a></td>
                    </tr>
                    <tr>
                      <th>8</th>
                      <td><a href="https://en.wikipedia.org/wiki/Liverpool_F.C." title="Liverpool F.C.">Liverpool</a></td>
                      <td>38</td>
                      <td>16</td>
                      <td>12</td>
                      <td>10</td>
                      <td>63</td>
                      <td>50</td>
                      <td>+13</td>
                      <td>60</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>9</th>
                      <td><a href="https://en.wikipedia.org/wiki/Stoke_City_F.C." title="Stoke City F.C.">Stoke City</a></td>
                      <td>38</td>
                      <td>14</td>
                      <td>9</td>
                      <td>15</td>
                      <td>41</td>
                      <td>55</td>
                      <td>−14</td>
                      <td>51</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>10</th>
                      <td><a href="https://en.wikipedia.org/wiki/Chelsea_F.C." title="Chelsea F.C.">Chelsea</a></td>
                      <td>38</td>
                      <td>12</td>
                      <td>14</td>
                      <td>12</td>
                      <td>59</td>
                      <td>53</td>
                      <td>+6</td>
                      <td>50</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>11</th>
                      <td><a href="https://en.wikipedia.org/wiki/Everton_F.C." title="Everton F.C.">Everton</a></td>
                      <td>38</td>
                      <td>11</td>
                      <td>14</td>
                      <td>13</td>
                      <td>59</td>
                      <td>55</td>
                      <td>+4</td>
                      <td>47</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>12</th>
                      <td><a href="https://en.wikipedia.org/wiki/Swansea_City_A.F.C." title="Swansea City A.F.C.">Swansea City</a></td>
                      <td>38</td>
                      <td>12</td>
                      <td>11</td>
                      <td>15</td>
                      <td>42</td>
                      <td>52</td>
                      <td>−10</td>
                      <td>47</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>13</th>
                      <td><a href="https://en.wikipedia.org/wiki/Watford_F.C." title="Watford F.C.">Watford</a></td>
                      <td>38</td>
                      <td>12</td>
                      <td>9</td>
                      <td>17</td>
                      <td>40</td>
                      <td>50</td>
                      <td>−10</td>
                      <td>45</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>14</th>
                      <td><a href="https://en.wikipedia.org/wiki/West_Bromwich_Albion_F.C." title="West Bromwich Albion F.C.">West Bromwich Albion</a></td>
                      <td>38</td>
                      <td>10</td>
                      <td>13</td>
                      <td>15</td>
                      <td>34</td>
                      <td>48</td>
                      <td>−14</td>
                      <td>43</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>15</th>
                      <td><a href="https://en.wikipedia.org/wiki/Crystal_Palace_F.C." title="Crystal Palace F.C.">Crystal Palace</a></td>
                      <td>38</td>
                      <td>11</td>
                      <td>9</td>
                      <td>18</td>
                      <td>39</td>
                      <td>51</td>
                      <td>−12</td>
                      <td>42</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>16</th>
                      <td><a href="https://en.wikipedia.org/wiki/A.F.C._Bournemouth" title="A.F.C. Bournemouth">AFC Bournemouth</a></td>
                      <td>38</td>
                      <td>11</td>
                      <td>9</td>
                      <td>18</td>
                      <td>45</td>
                      <td>67</td>
                      <td>−22</td>
                      <td>42</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>17</th>
                      <td><a href="https://en.wikipedia.org/wiki/Sunderland_A.F.C." title="Sunderland A.F.C.">Sunderland</a></td>
                      <td>38</td>
                      <td>9</td>
                      <td>12</td>
                      <td>17</td>
                      <td>48</td>
                      <td>62</td>
                      <td>−14</td>
                      <td>39</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>18</th>
                      <td><a href="https://en.wikipedia.org/wiki/Newcastle_United_F.C." title="Newcastle United F.C.">Newcastle United</a> <strong>(R)</strong>
                      </td>
                      <td>38</td>
                      <td>9</td>
                      <td>10</td>
                      <td>19</td>
                      <td>44</td>
                      <td>65</td>
                      <td>−21</td>
                      <td>37</td>
                      <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>
                    </tr>
                    <tr>
                      <th>19</th>
                      <td><a href="https://en.wikipedia.org/wiki/Norwich_City_F.C." title="Norwich City F.C.">Norwich City</a> <strong>(R)</strong>
                      </td>
                      <td>38</td>
                      <td>9</td>
                      <td>7</td>
                      <td>22</td>
                      <td>39</td>
                      <td>67</td>
                      <td>−28</td>
                      <td>34</td>
                      <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>    </tr>
                    <tr>
                      <th>20</th>
                      <td><a href="https://en.wikipedia.org/wiki/Aston_Villa_F.C." title="Aston Villa F.C.">Aston Villa</a> <strong>(R)</strong>
                      </td>
                      <td>38</td>
                      <td>3</td>
                      <td>8</td>
                      <td>27</td>
                      <td>27</td>
                      <td>76</td>
                      <td>−49</td>
                      <td>17</td>
                      <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="page_4" class="columns is-multiline">
                <div class="column is-quarter select">
                  <select onchange="goToPoint(this.value);">
                    <option value=''>Select Location:</option>
                    <option value=0>Edsa Shangri-la</option>
                    <option value=1>The Podium</option>
                    <option value=2>Buffalo Wild Wings</option>
                    <option value=3>Oriental Pearl</option>
                    <option value=4>ActivAsia Inc.</option>
                    <option value=5>Pioneer Center</option>
                    <option value=6>Greenfield</option>
                    <option value=7>Puregold</option>
                    <option value=8>Hideout</option>
                  </select>

                  <div id="renderWindow"></div>
                </div>
                <div class="column is-three-quarters">
                  <div id='map' style='height: 400px;'></div>
                  <div id='marker1'></div>
                </div>
              </div>
              <div id="page_5" class="columns is-multiline">
                <div class="column is-full">
                  <section class="hero">
                    <div class="hero-body">
                      <div class="container">
                        <h1 class="title is-2">
                          Researchers
                        </h1>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Test
                          </h2>
                          <h2 class="block">
                            Test 
                          </h2>
                        </section>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="page_6" class="columns is-multiline">
                <div class="column is-full">
                  <section class="hero">
                    <div class="hero-body">
                      <div class="container">
                        <h1 class="title is-2">
                          Authors
                        </h1>
                        <hr>
                        <div class="column is-three-quarters">
                          <section class="block">
                            <article class="media">
                              <figure class="media-left">
                                <p class="image is-64x64">
                                  <img src="assets/author_doc.jpg">
                                </p>
                              </figure>
                              <div class="media-content">
                                <div class="content">
                                  <p>
                                    <strong>Dominic Ligot</strong> <small>dominic.ligot@cirrolytix.com</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                  </p>
                                </div>
                                <nav class="level is-mobile">
                                  <div class="level-left">
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                    </a>
                                  </div>
                                </nav>
                              </div>
                              <div class="media-right">
                                <button class="fa fa-linkedin"></button>
                              </div>
                            </article>
                          </section>
                        </div>
                        <div class="column is-three-quarters">
                          <section class="block">
                            <article class="media">
                              <figure class="media-left">
                                <p class="image is-64x64">
                                  <img src="assets/author_claire.jpg">
                                </p>
                              </figure>
                              <div class="media-content">
                                <div class="content">
                                  <p>
                                    <strong>Claire San Juan-Tayco</strong> <small>francesclaire.tayco@cirrolytix.com</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                  </p>
                                </div>
                                <nav class="level is-mobile">
                                  <div class="level-left">
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                    </a>
                                  </div>
                                </nav>
                              </div>
                              <div class="media-right">
                                <button class="fa fa-linkedin"></button>
                              </div>
                            </article>
                          </section>
                        </div>
                        <div class="column is-three-quarters">
                          <section class="block">
                            <article class="media">
                              <figure class="media-left">
                                <p class="image is-64x64">
                                  <img src="assets/author_jansen.jpg">
                                </p>
                              </figure>
                              <div class="media-content">
                                <div class="content">
                                  <p>
                                    <strong>Jansen Lopez</strong> <small>jansen.lopez@cirrolytix.com</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                  </p>
                                </div>
                                <nav class="level is-mobile">
                                  <div class="level-left">
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                    </a>
                                  </div>
                                </nav>
                              </div>
                              <div class="media-right">
                                <button class="fa fa-linkedin"></button>
                              </div>
                            </article>
                          </section>
                        </div>
                        <div class="column is-three-quarters">
                          <section class="block">
                            <article class="media">
                              <figure class="media-left">
                                <p class="image is-64x64">
                                  <img src="assets/author_mark.jpg">
                                </p>
                              </figure>
                              <div class="media-content">
                                <div class="content">
                                  <p>
                                    <strong>Mark Toledo</strong> <small>mark.toledo@cirrolytix.com</small>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                  </p>
                                </div>
                                <nav class="level is-mobile">
                                  <div class="level-left">
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                    </a>
                                    <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                    </a>
                                  </div>
                                </nav>
                              </div>
                              <div class="media-right">
                                <button class="fa fa-linkedin"></button>
                              </div>
                            </article>
                          </section>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="page_7" class="columns is-multiline">
                <div class="column is-full">
                  <article class="message is-dark">
                    <div class="message-header">Chart</div>
                    <div class="message-body">
                      <div id="barHeadDiv">
                        <canvas id="barContentDiv" style="height: 400px;"></canvas>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </section>
            
          </main>
        </div>
      </div>
      <script src="js/Chart.bundle.js"></script>
      <script src="js/charting.js"></script>
      <script src="js/mapping.js"></script>
      <script>

        // function updateBarContent(divSelect) {
        //   var xmlhttp = new XMLHttpRequest();
        //   xmlhttp.onreadystatechange = function() {
        //     if (this.readyState == 4 && this.status == 200) {
        //       document.getElementById("barContentDiv").innerHTML = '&nbsp;';
        //       document.getElementById("barContentDiv").innerHTML = '<canvas id="barContentChart"></canvas>';
        //       var chartString = this.responseText;
        //       updateBarContentChart(chartString, divSelect); 
        //       document.getElementById("barContentChartMsg").innerHTML = "";			
        //     } else {
        //       document.getElementById("barContentChartMsg").innerHTML = "Executing Query...";
        //     }
        //   };
        //   xmlhttp.open("GET", "data/content_bar.php?divSelect="+ encodeURIComponent(divSelect), true);
        //   xmlhttp.send();
        // }

        

        


        

        document.getElementById('dashboard').addEventListener('click', dashboardChange)
        document.getElementById('project').addEventListener('click', dashboardChange)
        document.getElementById('search').addEventListener('click', dashboardChange)
        document.getElementById('models').addEventListener('click', dashboardChange)
        document.getElementById('mapping').addEventListener('click', dashboardChange)
        document.getElementById('github').addEventListener('click', dashboardChange)
        document.getElementById('presentation').addEventListener('click', dashboardChange)
        document.getElementById('authors').addEventListener('click', dashboardChange)


        function dashboardChange(){
          var id = this.id
          if(id == "dashboard"){
            document.getElementById('dashboard').classList.add("is-active")
            document.getElementById('project').classList.remove("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('models').classList.remove("is-active")
            document.getElementById('mapping').classList.remove("is-active")
            document.getElementById('github').classList.remove("is-active")
            document.getElementById('presentation').classList.remove("is-active")
            document.getElementById('authors').classList.remove("is-active")
            document.getElementById('project_list').classList.add("is-hidden")
          } else if(id == "project"){
            document.getElementById('project_list').classList.toggle("is-hidden")
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('project').classList.add("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('models').classList.remove("is-active")
            document.getElementById('mapping').classList.remove("is-active")
            document.getElementById('github').classList.remove("is-active")
            document.getElementById('presentation').classList.remove("is-active")
            document.getElementById('authors').classList.remove("is-active")
          }  else if (id == "search"){
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('project').classList.remove("is-active")
            document.getElementById('search').classList.add("is-active")
            document.getElementById('models').classList.remove("is-active")
            document.getElementById('mapping').classList.remove("is-active")
            document.getElementById('github').classList.remove("is-active")
            document.getElementById('presentation').classList.remove("is-active")
            document.getElementById('authors').classList.remove("is-active")
            document.getElementById('project_list').classList.add("is-hidden")
          } else if (id == "models"){
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('project').classList.remove("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('models').classList.add("is-active")
            document.getElementById('mapping').classList.remove("is-active")
            document.getElementById('github').classList.remove("is-active")
            document.getElementById('presentation').classList.remove("is-active")
            document.getElementById('authors').classList.remove("is-active")
            document.getElementById('project_list').classList.add("is-hidden")
          } else if (id == "mapping"){
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('project').classList.remove("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('models').classList.remove("is-active")
            document.getElementById('mapping').classList.add("is-active")
            document.getElementById('github').classList.remove("is-active")
            document.getElementById('presentation').classList.remove("is-active")
            document.getElementById('authors').classList.remove("is-active")
            document.getElementById('project_list').classList.add("is-hidden")
          } else if (id == 'github') {
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('project').classList.remove("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('models').classList.remove("is-active")
            document.getElementById('mapping').classList.remove("is-active")
            document.getElementById('github').classList.add("is-active")
            document.getElementById('presentation').classList.remove("is-active")
            document.getElementById('authors').classList.remove("is-active")
            document.getElementById('project_list').classList.add("is-hidden")
          } else if (id == 'presentation'){
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('project').classList.remove("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('models').classList.remove("is-active")
            document.getElementById('mapping').classList.remove("is-active")
            document.getElementById('github').classList.remove("is-active")
            document.getElementById('presentation').classList.add("is-active")
            document.getElementById('authors').classList.remove("is-active")
            document.getElementById('project_list').classList.add("is-hidden")
          } 
          else if (id == 'authors') {
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('project').classList.remove("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('models').classList.remove("is-active")
            document.getElementById('mapping').classList.remove("is-active")
            document.getElementById('github').classList.remove("is-active")
            document.getElementById('presentation').classList.remove("is-active")
            document.getElementById('authors').classList.add("is-active")
            document.getElementById('project_list').classList.add("is-hidden")
          }
        }

      </script>
  </body>
</html>

