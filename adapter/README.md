## 1 - O padrão Adapter é um padrão de design ESTRUTURAL que permite que objetos com interfaces incompatíveis trabalhem juntos. 
## Ele atua como um intermediário entre dois objetos, convertendo a interface de um objeto em outra interface esperada pelo cliente. 
## Em resumo, o Adapter permite que objetos com interfaces diferentes se comuniquem e colaborem entre si.

EXEMPLO DE USO: Quando á vários tipos de bancos de dados na aplicação e é necessário adaptações:

Reutilização de código existente: Permite que você reutilize classes existentes mesmo que suas interfaces não sejam compatíveis com o sistema que você está desenvolvendo.

Interoperabilidade: Facilita a integração com sistemas legados ou bibliotecas de terceiros que possuem interfaces diferentes das que você precisa.

Flexibilidade: Permite que você adicione ou altere o comportamento de um objeto sem modificar seu código original, adaptando sua interface conforme necessário.

Separação de preocupações: Ajuda a separar a lógica de adaptação da lógica principal do sistema, mantendo o código mais organizado e fácil de entender.

Padronização de interfaces: Pode ser usado para padronizar interfaces de diferentes classes ou sistemas, facilitando o desenvolvimento e a manutenção do código.

Em resumo, o Adapter é útil para integrar sistemas com interfaces incompatíveis, permitindo a reutilização de código existente, a interoperabilidade entre sistemas e a flexibilidade na adaptação de interfaces.