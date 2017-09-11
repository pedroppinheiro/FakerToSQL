<?php

namespace Providers;

class GolPerson extends \Faker\Provider\pt_BR\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameMale}} {{lastName}} {{lastName}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}} {{suffix}}',
    );

    protected static $firstNameMale = array(
        'Aaron', 'Adriano', 'Alan', 'Alexandre', 'Alonso', 'Anderson', 'Andres', 'Antônio', 
        'Benjamin', 'Bruno', 'Camilo', 'Carlos', 'Christian', 'Christopher', 'Cristóvão', 
        'Daniel', 'Dante', 'David', 'Diego', 'Eduardo', 'Elias', 'Emanuel', 'Emiliano', 
        'Emílio', 'Estêvão', 'Evandro', 'Everton', 'Felipe', 'Fernando', 'Francisco', 'Franco', 
        'Fábio', 'Gabriel', 'Gian', 'Guilherme', 'Gustavo', 'Henrique','Hernani', 'Horácio', 
        'Hugo', 'Ian', 'Inácio', 'Isaac', 'Ivan', 'Jerônimo', 'Jorge', 'Josué', 'José',
        'João', 'Kevin', 'Leandro', 'Leonardo', 'Lucas', 'Luciano', 'Luis', 'Manuel', 'Mateus', 
        'Matias', 'Miguel', 'Mário', 'Máximo', 'Noel', 'Pablo', 'Paulo', 'Pedro', 'Rafael', 
        'Ricardo', 'Rodrigo', 'Samuel', 'Santiago', 'Simon', 'Sérgio', 'Thales', 'Thiago', 'Tomás', 
        'Valentin', 'Vicente', 'Agostinho', 'Demian', 'Giovane', 'Jácomo', 'Martinho', 'Maximiano', 
        'Natal', 'Sebastião', 'Simão', 'Teobaldo', 'Ziraldo', 'Everson', 'Ewertom', 'Artur', 'Tiago', 
        'Vinicius', 'Nelson', 'Davi', 'David', 'Djalma', 'Yuri', 'Igor', 'William', 'Wesley', 'Victor', 
        'Matheus', 'Marcos', 'Saul',  'Jordan', 'Jonas', 'Joaquim', 'Jefferson', 'Caio', 'Breno', 'Rivaldo', 
        'Renato', 'Antonio', 'Aldo', 'Agenor', 'Eudes', 'Euler', 'Evaldo', 'Fabio', 'Flavio', 'Geovane', 
        'Gilberto', 'Higor', 'Lucio', 'Luiz', 'Luan', 'Laercio', 'Elton', 'Wagner', 'Washington', 'Walter', 
        'Danilo', 'Cláudio', 'César', 'Marcelo', 'Raimundo', 'Edimilson', 'Fabiano', 'Renan', 'Bernardo', 
        'Heitor', 'Nicolas', 'Murilo', 'Diogo', 'Augusto', 'Douglas', 'Charles', 'Israel', 'Erick', 'Vicente', 
        'Edson', 'Ruan', 'Saulo', 'Robson', 'Thomas', 'Rogério', 'Enzo', 'Ramon', 'Ronaldo', 'Cristiano', 
        'Alessandro', 'Wagner', 'Frederico', 'Manoel', 'Júlio', 'Rui', 'Rodolfo', 'Rubens', 'Celso', 'Cássio', 
        'Jairo'
    );

    protected static $firstNameFemale = array(
        'Abril', 'Adriana', 'Agustina', 'Alessandra', 'Alexa', 'Alma', 'Amanda', 'Amélia', 'Ana', 'Andrea', 
        'Antonieta', 'Ariadna', 'Ariana', 'Ashley', 'Beatriz', 'Bianca', 'Camila', 'Carla', 'Carolina', 
        'Catarina', 'Clara', 'Daniela', 'Elizabeth', 'Emília', 'Fabiana', 'Fátima', 'Gabriela', 'Giovana', 
        'Helena', 'Irene', 'Isabel', 'Isabella', 'Isadora', 'Ivana', 'Jasmin', 'Joana', 'Josefina', 
        'Juliana', 'Julieta', 'Júlia', 'Ketlin', 'Laura', 'Luana', 'Luara', 'Luciana', 'Luna', 'Luzia', 
        'Madalena', 'Maitê', 'Malena', 'Manuela', 'Mariana', 'Mel', 'Melissa', 'Mia', 'Micaela', 'Michele', 
        'Miranda', 'Natália', 'Nicole', 'Noelí', 'Norma', 'Nádia', 'Olívia', 'Ornela', 'Paula', 'Paulina', 
        'Pâmela', 'Rafaela', 'Rebeca', 'Regina', 'Renata', 'Sabrina', 'Salomé', 'Samanta', 'Sarah', 'Silvana', 
        'Sofia', 'Sophie', 'Suzana', 'Taís', 'Tábata', 'Valentina', 'Valéria', 'Violeta', 'Vitória', 'Abgail', 
        'Constância', 'Hortência', 'Tessália', 'Thalissa', 'Jaqueline', 'Denise', 'Diana', 'Zeneide', 'Yolanda', 
        'Valquiria', 'Yasmin', 'Viviane', 'Vilma', 'Marina', 'Maria', 'Jurema', 'Carla', 'Jordana', 'Jéssica', 
        'Barbara', 'Ariane', 'Natasha', 'Andreza', 'Gisele', 'Anita', 'Larissa', 'Lúcia', 'Laís', 'Laiane', 
        'Luciane', 'Karina', 'Caroline', 'Karen', 'Karine', 'Katia', 'Karla', 'Joelma', 'Darlene', 'Daniele', 
        'Dandara', 'Cíntia', 'Lorena', 'Francisca', 'Antonia', 'Sebastiana', 'Paola', 'Consuelo', 'Alice', 
        'Aline', 'Vanessa', 'Lívia', 'Brenda', 'Débora', 'Alana', 'Isis', 'Emilly', 'Raíssa', 'Talita', 
        'Marcela', 'Sandra', 'Tatiana', 'Elisa', 'Graziela', 'Tainá', 'Érica', 'Adriele', 'Eliane', 'Nayara', 
        'Sônia', 'Monique', 'Nayana', 'Joice', 'Jamile', 'Deise'
    );

    protected static $lastName = array(
        'Abreu', 'Azevedo', 'Aguiar', 'Aragão', 'Assunção', 'Aranda', 'Ávila',
        'Balestero', 'Barreto', 'Barros', 'Batista', 'Bezerra', 'Beltrão',
        'Benites', 'Bittencourt', 'Branco', 'Bonilha', 'Brito', 'Burgos',
        'Caldeira', 'Camacho', 'Campos', 'Carmona', 'Carrara', 'Casanova',
        'Chaves', 'Cervantes', 'Colaço', 'Cordeiro', 'Corona', 'Correia',
        'Cortês', 'Cruz', 'Dávila', 'Delatorre', 'Delgado', 'Delvalle',
        'Dias', 'Domingues', 'Dominato', 'Duarte', 'Escobar', 'Espinoza',
        'Esteves', 'Estrada', 'Faria', 'Faro', 'Feliciano', 'Ferminiano',
        'Fernandes', 'Ferraz', 'Fidalgo', 'Furtado',
        'Ferreira', 'Flores', 'Fonseca', 'Franco', 'Fontes', 'Galindo',
        'Galhardo', 'Galvão', 'Garcia', 'Gil', 'Godói', 'Gomes', 'Gonçalves',
        'Grego', 'Guerra', 'Gusmão', 'Jimenes', 'Leal', 'Leon', 'Lira',
        'Lovato', 'Lozano', 'Lutero', 'Madeira', 'Maldonado', 'Marés', 'Marin',
        'Marinho', 'Marques', 'Martines', 'Mascarenhas', 'Matias', 'Matos',
        'Maia', 'Medina', 'Meireles', 'Mendes', 'Mendonça', 'Molina',
        'Montenegro', 'Neves', 'Oliveira', 'Ortega', 'Ortiz', 'Quintana',
        'Queirós',  'Pacheco', 'Padilha', 'Padrão', 'Paes', 'Paz', 'Pedrosa',
        'Pena', 'Pereira', 'Perez', 'Prado', 'Pontes', 'Quintana', 'Queirós',
        'Ramires', 'Ramos', 'Rangel', 'Rezende', 'Reis', 'Rico', 'Rios',
        'Rivera', 'Rocha', 'Rodrigues', 'Romero', 'Roque', 'Rosa', 'Salas',
        'Salazar', 'Sales', 'Salgado', 'Sanches', 'Sandoval', 'Santacruz',
        'Santana', 'Santiago', 'Saraiva', 'Sepúlveda', 'Serna', 'Serra',
        'Serrano', 'Soares', 'Solano', 'Soto', 'Tamoio', 'Teles', 'Toledo',
        'Torres', 'Uchoa', 'Urias', 'Valdez', 'Valência', 'Valentin', 'Vale',
        'Vasques', 'Vega', 'Velasques', 'Verdugo', 'Verdara', 'Vieira', 'Vila',
        'Zamana', 'Zambrano', 'Zaragoça', 'Silva', 'Dores', 'Souza', 'Pinheiro', 
        'Almeida', 'Costa', 'Santos', 'Sampaio', 'Nascimento', 'Carneiro', 
        'Barbosa', 'Couto', 'Goes', 'Leão', 'Martins', 'Carvalho', 'Jesus', 
        'Araujo', 'Medeiros', 'Paixão', 'Lima', 'Andrade', 'Teixeira', 
        'Caetano', 'Passos', 'Glória', 'Alves', 'Caldas', 'Coelho', 'Cunha'
    );

    // protected static $titleMale = array('Sr.', 'Dr.',);

    // protected static $titleFemale = array('Sra.', 'Srta.', 'Dr.',);

    protected static $suffix = array('Filho', 'Neto', 'Sobrinho', 'Junior');

    /**
     * @example 'Jr.'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * Random valid pis number.
     * @param bool $formatted If the number should have dots/dashes or not.
     * @return string
     */
    public function pis($formatted = true) {
        $pis = $this->generator->numerify('##########');
        $pis .= $this->digitoVerificadorPIS($pis);

        return $formatted? vsprintf('%d%d%d.%d%d%d%d%d.%d%d-%d', str_split($pis)) : $pis;
    }

    private function digitoVerificadorPIS($pis) {
        #sequencia de números a serem calculados
        $seqcalc = "3298765432";
        
        $soma = 0;
        for($i = 0; $i < 10; $i++){
            $soma += $pis[$i] * $seqcalc[$i];
        }
        return (($soma % 11) < 2) ? 0 : (11 - ($soma % 11));
    }
}
