
<?php
abstract class Enum
{
    static function getKeys()
    {
        $class = new ReflectionClass(get_called_class());
        return array_keys($class->getConstants());
    }
}

abstract class Msg extends Enum
{
    const ADICIONA = "Adicionado com sucesso!...";
    const ERRO = "ERROA AO ADCIONAR!";
}


abstract class Exame extends Enum
{
    const AVALIACAO = "AVALIACAO";
    const PROVA_PARCELAR_1 = "PROVA-PARCELAR-1";
    const PROVA_PARCELAR_2= "PROVA-PARCELAR-2";
    const EXAME_EPOCA_NORMAL = "EXAME-EPOCA-NORMAL";
    const EXAME_RECURSO = "EXAME-RECURSO";
    const EXAME_ESPECIAL = "EXAME-ESPECIAL";
}
