<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuille</title>
    <link rel="stylesheet" href="act.css">
</head>
<body>


    <?php
    include("../head/head.php");
    ?>
<p class="box" >
    <p id="Hello_si"><span id="hello">Hello</span><br><span id="si">Si vous aimé ce que vous faite, c’est que vous êtes fait pour le développement.</span></p>
</p>
<p class="petite_box">
    <img src="avataaars.png" id="avtr">
    <br>
    <p id="nom_prenom">BELLAHCENE<br>Khaoula
    <br><br>
    <span id="trait">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
    <br><br><br></p>
    <span id="gi">1 ère année génie informatique</span>

<p>
      <a href="../cv/cv.pdf" target="_blank" id="cv">CV</a>
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
      <a href="../projet/projet.php" id="projet">PROJETS</a>
</p>
<p id="pour">Le développement web est une passion qui représente une opportunité pour donner vie à des
idées. Mon engagement envers le développement web est une
discipline qui a pu transformer ma manière d'interagir, de travailler et de collaborer.
<p>
<a id="savoir" href="#profil"> savoir plus</a>

<p id="salut">Salut ! Je suis Khaoula</p>
<p id="je">Je suis étudiante en première année de génie informatique. Au cours de ma première année, j'ai déjà eu l'opportunité d'acquérir des connaissances solides dans des différentes domaines tels que la programmation, les algorithmes, les bases de données et les réseaux. J'ai également eu l'occasion de participer à des petits projets pratiques qui m'ont permis de consolider ma compréhension des concepts théoriques et d'améliorer mes compétences en résolution de problèmes,et ma création de mon portfolio est la meilleure preuve.Je suis également intéressée par le domaine de l'intelligence artificielle et d'analyse de données, ce qui me pousse à suivre les dernières tendances.
<br>En tant qu'étudiante en première année, je suis consciente que j'ai encore beaucoup à apprendre, c'est pour cela que je suis ouverte aux opportunités de stage et de formation qui me permettront d'acquérir une expérience pratique et de me familiariser avec le monde professionnel.</p>


<p id="profil">PROFIL</p>

<!--  TABLE PERSONNEL ET DES COMPETENCES  -->
<table class="tab1" >
<tr>
    <th><p class="propos" >À PROPOS DE MOI</p></th>
    <th><p class="propos">MES Compétence</p> </th>
</tr>
<tr>
    <td><p class="je"><ul>
                      <li> Actuellement,je suis étudiante en 1 ère année génie informatique à l'école supérieur de technologie Oujda, aussi membre du club ENACTUS.</li>
                      <br>
                       <li>la combinaison entre les études et le parascolaire été un défi pour moi au début, mais j'ai pu réussir grâce à une bonne gestion de temps et à la priorisation.</li>
                       <br>
                       <li>le développement de mon profil est basé sur la fusion entre les hard skills (les langages de programmation) et les soft skills (la collaboration avec les autres, la communication, ...)</li>
                       <br>
                       <li>Je suis ouvert aux opportunités de formation (stage, événement, etc.) où je peux contribuer et apprendre. N’hésitez pas à me suivez-moi sur mon <a id="link" href="https://www.linkedin.com/in/khaoula-bellahcene-284b97266">Linkedin</a>  </li>
                       <br>
                       </ul>
        </p>
    </td>


    <td><p class="html"><ul>
        <pre>
                        <li class="html"><p class="competence">HTML</p> &nbsp &nbsp <progress id="file" max="100" value="90"> Intermédiaire à Avancée </progress></li>
                        <li class="html"><p class="competence">CSS</p> &nbsp &nbsp <progress id="file" max="100" value="90"> Intermédiaire à Avancée </progress></li>
                        <li class="html"><p class="competence">Java Script</p>&nbsp <progress id="file" max="100" value="70"> Intermédiaire </progress></li>
                        <li class="html"><p class="competence">SQL</p> &nbsp &nbsp <progress id="file" max="100" value="75"> Intermédiaire </progress></li>
                        <li class="html"><p class="competence">PHP</p> &nbsp &nbsp <progress id="file" max="100" value="60"> Intermédiaire </progress></li>
                        <li class="html"><p class="competence">C</p> &nbsp &nbsp <progress id="file" max="100" value="95"> Avancée </progress></li>
                        <li class="html"><p class="competence">Linux</p> &nbsp &nbsp <progress id="file" max="100" value="25"> Débutante </progress></li>
        </pre>
                        </ul>
        </p>
    </td>
    
</tr>
</table>




<pre id="sous">
    
    <p id="envoyer">Envoyez-moi un message!</p>
    <p id="vous" >Vous avez une question ou une proposition,
ou vous voulez simplement dire bonjour?</p><p id="vas">Vas-y . allez-y.</p>
<form name="sous" method="post" action="confirmation.php">
    <p class="nom">Votre nom:</p> <p class="nom">Votre courielle:</p> <br>
    
    
    
    <input type="text" class="remplir" name="votre_nom" placeholder="Entrer votre nom" required> <input type="email" class="remplir_email" name="votre_courielle" placeholder="Entrez votre adresse e-mail" required><br>





    <p class="nom">Votre message:</p>
     
    
    
    <textarea class="msg" name="message" rows="4"  required placeholder="taper ici"></textarea>








    <button type="submit" name="envoyer">Envoyer</button> <button type="reset" value="Effacer" name="effacer">Effacer</button>





</pre>


</body>
</html>