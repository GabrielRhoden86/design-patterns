## 1 - O Singleton é um padrão de projeto CRIACIONAL que garante a existência de apenas uma instância de uma classe e fornece um ponto global de acesso a ela. Isso é útil quando você quer ter certeza de que uma classe tenha exatamente uma instância em todo o seu programa. O Singleton é frequentemente usado em situações em que uma única instância de uma classe é necessária para coordenar ações em todo o sistema, como gerenciadores de conexão de banco de dados, logs e configurações.

* EXEMPLO DE USO: Utilizar uma única instância para uma conexão com o banco de dados

Vantagens:

Economia de recursos: Como apenas uma instância da conexão é criada e reutilizada, isso economiza recursos do sistema, como memória e CPU, que seriam utilizados para criar múltiplas conexões.

Evita problemas de concorrência: Garante que, em ambientes concorrentes, apenas uma conexão seja usada, evitando conflitos que poderiam ocorrer com várias conexões sendo abertas simultaneamente.

Simplicidade no código: Com o Singleton, você pode acessar a mesma conexão em qualquer lugar do código, sem a necessidade de passar a conexão como parâmetro ou recriá-la várias vezes.

Melhora na performance: Evita o custo de criar e destruir conexões repetidamente, o que pode melhorar o desempenho, especialmente em sistemas que realizam muitas operações de banco de dados.

Em resumo, o Singleton para conexão com o banco de dados ajuda a otimizar o uso de recursos, simplificar o código e melhorar a performance do sistema.