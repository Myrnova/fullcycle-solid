# fullcycle-solid

# SRP
A classe de exemplo tem muitas responsabilidades, ele precisa conectar no banco de dados, criar linhas no banco e retornar os dados através de getter/setters, o ideal teria ter classes separadas como repositorio que cria esses dados e um de conexão

# OCP
A classe de exemplo toda vez que quero calcular para um interesse novo, preciso adicionar um if novo

# LSP
No exemplo, temos o filme ModernTimes que extende de Movies, mas ele é um filme mudo então ele não implementa o metodo increaseVolume como a classe Movie implementa, então se eu tentar usar esse carinha como um substituto de Movies vai quebrar a implementação, então estamos quebrando o principio de o filho sempre conseguir substituir o pai

# ISP
Se uma classe extende outra, obrigatoriamente você precisa implementar todos os metodos que você está implementando na sua nova, então se a interface que você está implementando tem algum método a mais que você vai usar segregue as interfaces para não precisar criar métodos vazios

# DIP
Estamos criando um laço de dependencia do movie com a classe DramaCategory, então se mais pra frente você quiser passar uma ComedyCategory ou ActionCategory você não vai conseguir porque a classe está esperando uma instancia de DramaCategory, então o ideal é sempre depender de uma interface e não de uma instancia de uma classe.
Sempre observe se você está dando um new de uma classe dentro de outra classe você está tendo um acoplamento muito grande, então dependa de interface e construtor