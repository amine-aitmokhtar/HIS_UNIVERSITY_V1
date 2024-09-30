{{--
<!doctype html>
<html lang="en">
<head>
    <title>jQuery Smart Wizard Demo - The awesome jQuery step wizard plugin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootrap for the demo page -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Animate CSS for the css animation support if needed -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/smart_wizard_all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/formCandidature.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
  <br>

  <div class="container">
     <form>
            <!-- SmartWizard html -->
            <div id="smartwizard">
                    <ul class="nav nav-progress">
                        <li class="nav-item">
                        <a class="nav-link" href="#step-1">
                            <div class="num">1</div>
                            Customer Details
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#step-2">
                            <span class="num">2</span>
                            Products Details
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#step-3">
                            <span class="num">3</span>
                            Shipping Details
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="#step-4">
                            <span class="num">4</span>
                            Confirm Order
                        </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">

                    <h2 class="titre-formation">Choix de la Formation</h2>

                    <div class="selects-group">
                        <label for="formation-diplome" class="text-1-formation">Diplôme choisi</label>
                        <select class="form-select formation-select1" aria-label="Default select example" name="diplomeCand" required>
                        <option value="" disabled selected>Diplôme choisi</option>
                        <option value="1">Licence</option>
                        <option value="2">Master</option>
                        </select>
                    </div>
                    <div class="selects-group">
                        <label for="formation-mention" class="text-2-formation">Mention</label>
                        <select class="form-select formation-select2" aria-label="Default select example" name="mentionCand" required>
                        <option value="" disabled selected>Mention</option>
                        <option value="Informatique">Informatique - Systèmes d'information</option>
                        <option value="Droit">Droit - Droit public</option>
                        <option value="Economie">Economie & gestion des entreprises</option>
                        <option value="Sciencepoli">Sciences politiques - Relations internationales</option>
                        </select>
                    </div>
                    <div class="selects-group">
                        <label for="formation-niveau" class="text-3-formation">Niveau de diplôme</label>
                        <select class="form-select formation-select3" aria-label="Default select example" name="niveauCand" required>
                        <option value="" disabled selected>Niveau de diplôme</option>
                        <option value="L1">Licence 1</option>
                        <option value="L2">Licence 2</option>
                        <option value="L3">Licence 3</option>
                        </select>
                    </div>


                    <div class="button-contenu">
                        <button type="button" class="sw-btn-prev sw-btn">Précédent</button>
                        <button class="sw-btn-next sw-btn disabled" type="button">Suivant</button>
                    </div>

        </div>



      <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">


              <h2 class="titre-etatcivil">Informations générales</h2>
                  <div class="etat-civil-nom mb-3 mt-3 move-right">
                      <label for="nom" class="form-label">Nom</label>
                      <input type="text" class="etat-civil-nom-champs form-control" id="nom" placeholder="Votre nom" name="nom" required>

                  </div>

                  <div class="etat-civil-prenom mb-3 mt-3 move-right">
                      <label for="prenom" class="form-label">Prénom</label>
                      <input type="text" class="etat-civil-nom-champs form-control" id="prenom" placeholder="Votre prénom" name="prenom" required>

                  </div>

              <div class="row">
                  <div class="col-sm-6 ">
                      <div class="d-flex align-items-center three-select">
                          <label for="dateNaissance" class="form-label mr-2">Date de naissance</label>
                          <div class="naiss-espace-ligne col p-0">
                            <div class="d-flex">

                                <input type="date" class="formation-select" name="datenaiss">

                            </div>
                          </div>
                        </div>

                  </div>
                  <div class="etat-civil-villenass mb-3 mt-3 move-right">
                      <label for="villenass" class="form-label">Ville naissance</label>
                      <input type="text" class="etat-civil-villenass-champs form-control" id="villenss" placeholder="Votre ville de naissance" name="villenaiss" required>
                  </div>

                  <h3 class="titre-etat-civil-adr">Adresse</h3>
                  <div class="container cadre">

                      <div class="row g-3 ">

                              <div class="col-12 etat-civil-telephone">
                                <label for="telephone" class="form-label">Téléphone</label>
                                <input type="text" class="form-control champs-tel" id="inputTelephone" name="telephone" required>
                              </div>



                            <div class="col-12 etat-civil-rue">
                              <label for="inputrue" class="form-label">Nº et rue </label>
                              <input type="text" class="form-control champs-nrue" id="inputrue" name="adresse" required >
                          </div>
                          <div class="col-12 etat-civil-pays">
                              <label for="inputPays" class="form-label">Pays</label>
                              <select class="form-select select-pays" aria-label="Default select example" name="pays" onchange="toggleVilleInput()" required>
                                  <option value="" disabled selected>-----</option>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AX">Aland Islands</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra</option>
                                  <option value="AO">Angola</option>
                                  <option value="AI">Anguilla</option>
                                  <option value="AQ">Antarctica</option>
                                  <option value="AG">Antigua and Barbuda</option>
                                  <option value="AR">Argentina</option>
                                  <option value="AM">Armenia</option>
                                  <option value="AW">Aruba</option>
                                  <option value="AU">Australia</option>
                                  <option value="AT">Austria</option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas</option>
                                  <option value="BH">Bahrain</option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BB">Barbados</option>
                                  <option value="BY">Belarus</option>
                                  <option value="BE">Belgium</option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin</option>
                                  <option value="BM">Bermuda</option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia</option>
                                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                  <option value="BA">Bosnia and Herzegovina</option>
                                  <option value="BW">Botswana</option>
                                  <option value="BV">Bouvet Island</option>
                                  <option value="BR">Brazil</option>
                                  <option value="IO">British Indian Ocean Territory</option>
                                  <option value="BN">Brunei Darussalam</option>
                                  <option value="BG">Bulgaria</option>
                                  <option value="BF">Burkina Faso</option>
                                  <option value="BI">Burundi</option>
                                  <option value="KH">Cambodia</option>
                                  <option value="CM">Cameroon</option>
                                  <option value="CA">Canada</option>
                                  <option value="CV">Cape Verde</option>
                                  <option value="KY">Cayman Islands</option>
                                  <option value="CF">Central African Republic</option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile</option>
                                  <option value="CN">China</option>
                                  <option value="CX">Christmas Island</option>
                                  <option value="CC">Cocos (Keeling) Islands</option>
                                  <option value="CO">Colombia</option>
                                  <option value="KM">Comoros</option>
                                  <option value="CG">Congo</option>
                                  <option value="CD">Congo, Democratic Republic of the Congo</option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="CI">Cote D'Ivoire</option>
                                  <option value="HR">Croatia</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CW">Curacao</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
                                  <option value="DK">Denmark</option>
                                  <option value="DJ">Djibouti</option>
                                  <option value="DM">Dominica</option>
                                  <option value="DO">Dominican Republic</option>
                                  <option value="EC">Ecuador</option>
                                  <option value="EG">Egypt</option>
                                  <option value="SV">El Salvador</option>
                                  <option value="GQ">Equatorial Guinea</option>
                                  <option value="ER">Eritrea</option>
                                  <option value="EE">Estonia</option>
                                  <option value="ET">Ethiopia</option>
                                  <option value="FK">Falkland Islands (Malvinas)</option>
                                  <option value="FO">Faroe Islands</option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland</option>
                                  <option value="FR">France</option>
                                  <option value="GF">French Guiana</option>
                                  <option value="PF">French Polynesia</option>
                                  <option value="TF">French Southern Territories</option>
                                  <option value="GA">Gabon</option>
                                  <option value="GM">Gambia</option>
                                  <option value="GE">Georgia</option>
                                  <option value="DE">Germany</option>
                                  <option value="GH">Ghana</option>
                                  <option value="GI">Gibraltar</option>
                                  <option value="GR">Greece</option>
                                  <option value="GL">Greenland</option>
                                  <option value="GD">Grenada</option>
                                  <option value="GP">Guadeloupe</option>
                                  <option value="GU">Guam</option>
                                  <option value="GT">Guatemala</option>
                                  <option value="GG">Guernsey</option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau</option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti</option>
                                  <option value="HM">Heard Island and Mcdonald Islands</option>
                                  <option value="VA">Holy See (Vatican City State)</option>
                                  <option value="HN">Honduras</option>
                                  <option value="HK">Hong Kong</option>
                                  <option value="HU">Hungary</option>
                                  <option value="IS">Iceland</option>
                                  <option value="IN">India</option>
                                  <option value="ID">Indonesia</option>
                                  <option value="IR">Iran, Islamic Republic of</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland</option>
                                  <option value="IM">Isle of Man</option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy</option>
                                  <option value="JM">Jamaica</option>
                                  <option value="JP">Japan</option>
                                  <option value="JE">Jersey</option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya</option>
                                  <option value="KI">Kiribati</option>
                                  <option value="KP">Korea, Democratic People's Republic of</option>
                                  <option value="KR">Korea, Republic of</option>
                                  <option value="XK">Kosovo</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Lao People's Democratic Republic</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon</option>
                                  <option value="LS">Lesotho</option>
                                  <option value="LR">Liberia</option>
                                  <option value="LY">Libyan Arab Jamahiriya</option>
                                  <option value="LI">Liechtenstein</option>
                                  <option value="LT">Lithuania</option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MO">Macao</option>
                                  <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                  <option value="MG">Madagascar</option>
                                  <option value="MW">Malawi</option>
                                  <option value="MY">Malaysia</option>
                                  <option value="MV">Maldives</option>
                                  <option value="ML">Mali</option>
                                  <option value="MT">Malta</option>
                                  <option value="MH">Marshall Islands</option>
                                  <option value="MQ">Martinique</option>
                                  <option value="MR">Mauritania</option>
                                  <option value="MU">Mauritius</option>
                                  <option value="YT">Mayotte</option>
                                  <option value="MX">Mexico</option>
                                  <option value="FM">Micronesia, Federated States of</option>
                                  <option value="MD">Moldova, Republic of</option>
                                  <option value="MC">Monaco</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="ME">Montenegro</option>
                                  <option value="MS">Montserrat</option>
                                  <option value="MA">Morocco</option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar</option>
                                  <option value="NA">Namibia</option>
                                  <option value="NR">Nauru</option>
                                  <option value="NP">Nepal</option>
                                  <option value="NL">Netherlands</option>
                                  <option value="AN">Netherlands Antilles</option>
                                  <option value="NC">New Caledonia</option>
                                  <option value="NZ">New Zealand</option>
                                  <option value="NI">Nicaragua</option>
                                  <option value="NE">Niger</option>
                                  <option value="NG">Nigeria</option>
                                  <option value="NU">Niue</option>
                                  <option value="NF">Norfolk Island</option>
                                  <option value="MP">Northern Mariana Islands</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PW">Palau</option>
                                  <option value="PS">Palestinian Territory, Occupied</option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines</option>
                                  <option value="PN">Pitcairn</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="PR">Puerto Rico</option>
                                  <option value="QA">Qatar</option>
                                  <option value="RE">Reunion</option>
                                  <option value="RO">Romania</option>
                                  <option value="RU">Russian Federation</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="BL">Saint Barthelemy</option>
                                  <option value="SH">Saint Helena</option>
                                  <option value="KN">Saint Kitts and Nevis</option>
                                  <option value="LC">Saint Lucia</option>
                                  <option value="MF">Saint Martin</option>
                                  <option value="PM">Saint Pierre and Miquelon</option>
                                  <option value="VC">Saint Vincent and the Grenadines</option>
                                  <option value="WS">Samoa</option>
                                  <option value="SM">San Marino</option>
                                  <option value="ST">Sao Tome and Principe</option>
                                  <option value="SA">Saudi Arabia</option>
                                  <option value="SN">Senegal</option>
                                  <option value="RS">Serbia</option>
                                  <option value="CS">Serbia and Montenegro</option>
                                  <option value="SC">Seychelles</option>
                                  <option value="SL">Sierra Leone</option>
                                  <option value="SG">Singapore</option>
                                  <option value="SX">Sint Maarten</option>
                                  <option value="SK">Slovakia</option>
                                  <option value="SI">Slovenia</option>
                                  <option value="SB">Solomon Islands</option>
                                  <option value="SO">Somalia</option>
                                  <option value="ZA">South Africa</option>
                                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                                  <option value="SS">South Sudan</option>
                                  <option value="ES">Spain</option>
                                  <option value="LK">Sri Lanka</option>
                                  <option value="SD">Sudan</option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard and Jan Mayen</option>
                                  <option value="SZ">Swaziland</option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland</option>
                                  <option value="SY">Syrian Arab Republic</option>
                                  <option value="TW">Taiwan, Province of China</option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania, United Republic of</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TL">Timor-Leste</option>
                                  <option value="TG">Togo</option>
                                  <option value="TK">Tokelau</option>
                                  <option value="TO">Tonga</option>
                                  <option value="TT">Trinidad and Tobago</option>
                                  <option value="TN">Tunisia</option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="TC">Turks and Caicos Islands</option>
                                  <option value="TV">Tuvalu</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine</option>
                                  <option value="AE">United Arab Emirates</option>
                                  <option value="GB">United Kingdom</option>
                                  <option value="US">United States</option>
                                  <option value="UM">United States Minor Outlying Islands</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Viet Nam</option>
                                  <option value="VG">Virgin Islands, British</option>
                                  <option value="VI">Virgin Islands, U.s.</option>
                                  <option value="WF">Wallis and Futuna</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                              </select>
                          </div>

                          <div class="codep-ville row">
                              <div class="col-sm-6 bg">
                                  <div class="etat-civil-codep mb-3 mt-3 move-right">
                                      <label for="inputcodepostale" class="form-label">Code Postal</label>
                                      <input type="text" class="form-control champs-codep" id="inputcodepostale" name="codepostal" required>
                                  </div>
                              </div>
                              <div class="col-sm-6 bg-">
                                  <div class="etat-civil-ville mb-3 mt-3 move-right">
                                      <label for="inputville" class="form-label">Ville</label>
                                      <span id="villeContainer"></span>
                                  </div>
                              </div>
                          </div>
                          <script>
                         function toggleVilleInput() {
                          var paysSelect = document.querySelector(".select-pays");
                          var villeContainer = document.getElementById("villeContainer");

                          // Efface le contenu précédent
                          villeContainer.innerHTML = "";

                          if (paysSelect.value === "DZ") {
                              // Crée un select pour la France avec l'attribut required
                              var selectVille = document.createElement("select");
                              selectVille.name = "ville";
                              selectVille.className = "form-select select-ville-algerie";
                              selectVille.required = true; // Ajoute l'attribut required
                              selectVille.innerHTML = `
                                  <option value="" disabled selected>-----</option>
                                  <option value = "1">Adrar</option>
                                  <option value = "2">Chlef</option>
                                  <option value = "3">Laghouat</option>
                                  <option value = "4">Oum El Bouaghi</option>
                                  <option value = "5">Batna</option>
                                  <option value = "6">Bejaia</option>
                                  <option value = "7">Biskra</option>
                                  <option value = "8">Bechar</option>
                                  <option value = "9">Blida</option>
                                  <option value = "10">Bouira</option>
                                  <option value = "11">Tamanrasset</option>
                                  <option value = "12">Tebessa</option>
                                  <option value = "13">Tlemcen</option>
                                  <option value = "14">Tiaret</option>
                                  <option value = "15">Tizi Ouzou</option>
                                  <option value = "16">Alger</option>
                                  <option value = "17">Djelfa</option>
                                  <option value = "18">Jijel</option>
                                  <option value = "19">Setif</option>
                                  <option value = "20">Saida</option>
                                  <option value = "21">Skikda</option>
                                  <option value = "22">Sidi Bel Abbes</option>
                                  <option value = "23">Annaba</option>
                                  <option value = "24">Guelma</option>
                                  <option value = "25">Constantine</option>
                                  <option value = "26">Medea</option>
                                  <option value = "27">Mostaganem</option>
                                  <option value = "28">MSila</option>
                                  <option value = "29">Mascara</option>
                                  <option value = "30">Ouargla</option>
                                  <option value = "31">Oran</option>
                                  <option value = "32">El Bayadh</option>
                                  <option value = "33">Illizi</option>
                                  <option value = "34">Bordj Bou Arreridj</option>
                                  <option value = "35">Boumerdes</option>
                                  <option value = "36">El Tarf</option>
                                  <option value = "37">Tindouf</option>
                                  <option value = "38">Tissemsilt</option>
                                  <option value = "39">El Oued</option>
                                  <option value = "40">Khenchela</option>
                                  <option value = "41">Souk Ahras</option>
                                  <option value = "42">Tipaza</option>
                                  <option value = "43">Mila</option>
                                  <option value = "44">Ain Defla</option>
                                  <option value = "45">Naama</option>
                                  <option value = "46">Ain Temouchent</option>
                                  <option value = "47">Ghardaia</option>
                                  <option value = "48">Relizane</option>
                              `;
                              villeContainer.appendChild(selectVille);
                          } else {
                              // Crée un input text pour les autres pays avec l'attribut required
                              var inputVille = document.createElement("input");
                              inputVille.type = "text";
                              inputVille.name = "ville";
                              inputVille.className = "form-control input-ville-autre";
                              inputVille.required = true; // Ajoute l'attribut required
                              villeContainer.appendChild(inputVille);
                          }
                      }



                              </script>

                              <style>
                              /* Exemple de règles CSS pour le select de la France */
                              .select-ville-algerie {
                                  /* Ajoute tes règles CSS personnalisées ici */
                                  width:28.2rem;
                                  color:black;
                                  /* ... */
                              }

                              /* Exemple de règles CSS pour l'input des autres pays */
                              .input-ville-autre {
                                  /* Ajoute tes règles CSS personnalisées ici */
                                  width: 28.2rem;
                                  color: black;
                                  /* ... */
                              }

                              </style>


							  </div>
							</div>


					  </div>
						<br>

						<div class="button-contenu">
						  <button type="button" class="sw-btn-prev sw-btn disabled">Précédent</button>
						  <button class="sw-btn-next sw-btn disabled" type="button">Suivant</button>
						</div>



      </div>

                    </div>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
             </div>
      </form>

    <br /> &nbsp;
    </div>

    <!-- Bootrap for the demo page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jQuery Slim 3.6  -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->

    <!-- Include SmartWizard JavaScript source -->
    <script src="{{ asset('js/jquery.smartWizard.min.js') }}"></script>



    <script type="text/javascript">

        function onFinish(){ alert('Finish Clicked'); }
        function onCancel(){ $('#smartwizard').smartWizard("reset"); }

        $(function() {
            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
                $("#prev-btn").removeClass('disabled').prop('disabled', false);
                $("#next-btn").removeClass('disabled').prop('disabled', false);
                if(stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled').prop('disabled', true);
                } else if(stepPosition === 'last') {
                    $("#next-btn").addClass('disabled').prop('disabled', true);
                } else {
                    $("#prev-btn").removeClass('disabled').prop('disabled', false);
                    $("#next-btn").removeClass('disabled').prop('disabled', false);
                }

                // Get step info from Smart Wizard
                let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
                $("#sw-current-step").text(stepInfo.currentStep + 1);
                $("#sw-total-step").text(stepInfo.totalSteps);
            });

            $("#smartwizard").on("initialized", function(e) {
                console.log("initialized");
            });

            $("#smartwizard").on("loaded", function(e) {
                console.log("loaded");
            });

            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                // autoAdjustHeight: false,
                theme: 'dots', // basic, arrows, square, round, dots
                transition: {
                  animation:'myFade' // none|fade|slideHorizontal|slideVertical|slideSwing|css
                },
                toolbar: {
                  showNextButton: false, // show/hide a Next button
                  showPreviousButton: false, // show/hide a Previous button
                  position: 'bottom', // none/ top/ both bottom
                  extraHtml: ``
                },
                anchor: {
                    enableNavigation: true, // Enable/Disable anchor navigation
                    enableNavigationAlways: false, // Activates all anchors clickable always
                    enableDoneState: true, // Add done state on visited steps
                    markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    unDoneOnBackNavigation: false, // While navigate back, done state will be cleared
                    enableDoneStateNavigation: true // Enable/Disable the done state navigation
                },
                disabledSteps: [], // Array Steps disabled
                errorSteps: [], // Highlight step with errors
                hiddenSteps: [], // Hidden steps
                // getContent: (idx, stepDirection, selStep, callback) => {
                //   console.log('getContent',selStep, idx, stepDirection);
                //   callback('<h1>'+idx+'</h1>');
                // }
            });

            $.fn.smartWizard.transitions.myFade = (elmToShow, elmToHide, stepDirection, wizardObj, callback) => {
                if (!$.isFunction(elmToShow.fadeOut)) { callback(false); return; }

                if (elmToHide) {
                    elmToHide.fadeOut(wizardObj.options.transition.speed, wizardObj.options.transition.easing, () => {
                        elmToShow.fadeIn(wizardObj.options.transition.speed, wizardObj.options.transition.easing, () => {
                            callback();
                        });
                    });
                } else {
                    elmToShow.fadeIn(wizardObj.options.transition.speed, wizardObj.options.transition.easing, () => {
                        callback();
                    });
                }
            }


            $("#state_selector").on("change", function() {
                $('#smartwizard').smartWizard("setState", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                return true;
            });

            $("#style_selector").on("change", function() {
                $('#smartwizard').smartWizard("setStyle", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                return true;
            });

        });
    </script>
</body>
</html> --}}
