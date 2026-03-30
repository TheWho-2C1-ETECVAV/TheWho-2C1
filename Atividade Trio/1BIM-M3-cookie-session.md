## Exercício 1 - Diferença entre cookies e sessions

Cookies são arquivos de texto que são armazenados no navegador do usúario, para que o servidor se lembre das informações do usúario, como temas, login e idioma.   Por serem armazenados no navegador do usúario, os cookies são mais vulneráveis a ataques como *Croos-Site* ou *Scripting*(XSS).

Sessions oferecem mais segurança ao armazenar os dados do usúario no servidor. Ao acessar o site o servidor cria uma nova sessão e armazena os dados associados desta sessão, e então o servidor cria um cookie contendo o ID da sessão e envia ao navegador do usúario, assim, ao logar novamente no site o navegador envia o cookie com o ID da sessão de volta ao servidor, para que o servidor recupere os dados associados ao usúario.

Comumente os cookies são preferíveis para armazenar informações como idioma, temas, layout etc. Ou seja, dados leves, não sensíveis e para serem armazenados a longo prazo. Enquanto sessions são melhores para dados temporários que são necessário durante a navegação no site, como carrinhos de compra, dados de login etc. Ou dados sensíveis que necessitam de estarem seguros como dados pessoais.



# 

## Exercício 4 - Por que sessions são geralmente preferidas para autenticação de usuários

Sessions são mais comuns para autenticação de usuários principalmente pela segurança, pois ao utilizar cookies, os dados são armazenados no navegador, assim podendo ser manipulados pelo usúario, além de vírus e etc. Ao alocar os dados em sessions no servidor, evita qualquer manipulação do usúario, ou vírus, além de ao usar sessions além dos cookies, protege dados confindenciais e etc. Pois ao usar apenas cookies todos os dados ficam acessíveis ao usúario.


