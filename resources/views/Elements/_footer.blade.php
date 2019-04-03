<div id="container-footer">
    <footer id="footer">
        <div id="footer-col-1">
            <ul>
                <li><b class="titrefooter">Questions fréquentes</b></li>
                <li><a href="/creer-annonce">Poster une demande</a></li>
                <li><a href="/annonces">Voir la liste des demandes</a></li>
                <li><a href="/paiement-en-ligne">Comment fonctionne le paiement en ligne ?</a></li>
            </ul>
        </div>
        <div id="footer-col-2">
            <ul>
                <li><b class="titrefooter">Informations</b></li>
                <li><a href="/qui-sommes-nous">Qui sommes nous ?</a></li>
                <li><a href="/pourquoi-tonton-gazon">Pourquoi choisir Tonton gazon ?</a></li>
                <li><a href="/contact">Nous contacter</a></li>
                <li><a href="/recrutement">Recrutement</a></li>
            </ul>
        </div>
        <div id="footer-col-3">
            <ul>
                <li><b class="titrefooter">Mentions légales</b></li>
                <li><a href="/conditions-utilisation">Conditions générales d’utilisation</a></li>
                <li><a href="/politique-confidentialite">Politique de confidentialité et de respect de la vie privée</a></li>
                <li><a href="/referencement-controle">Référencement, classement des annonces et contrôle des avis</a></li>
                <li><a href="/mentions-legales">Mentions légales</a></li>
                <li><a href="/plan-du-site">Plan du site</a></li>
            </ul>
        </div>
        <div id="footer-col-4">
            <ul>
                <li><b class="titrefooter">Gestion de compte</b></li>
                @guest
                <li> <a href="{{ route('register') }}">Creer un compte</a>
                @else
                <li><a href="/utilisateur/{{ Auth::user()->id }}">Mon profil</a></li>
                <li><a href="/utilisateur/vos-donnees/{{ Auth::user()->id }}">Accéder à mes données</a></li>
                @endguest
            </ul>
        </div>
        <div id="footer-col-5">
                <ul>
                    <li><b class="titrefooter"> NewsLetter</b></li>
                </ul>
                <input type="mail" placeholder="AdresseMail@jsp.com" id="footer-mail" /><!-- --><input type="submit" value="C'est partie !" id="footer-submit"/>
            </div>
    </footer>
</div>