<?php 
Class Pessoa
{


public function __construct(  
    protected string $nome="",
    protected int $idade=0,
    protected string $CorCabelo="",
    protected string $sexo=""
    )
{
  
}
//Setters

public function IdadeEmExtenso(): string
{
    $unidades = ["zero", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove", "dez",
                 "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezessete", "dezoito", "dezenove"];
    $dezenas = ["", "", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"];

    if ($this->idade < 20) {
        return $unidades[$this->idade];
    }

    if ($this->idade < 100) {
        $dezena = intdiv($this->idade, 10);
        $unidade = $this->idade % 10;
        return $dezenas[$dezena] . ($unidade ? " e " . $unidades[$unidade] : "");
    }

    return "idade fora do intervalo";
}



public function setNome(string $nome) : self
{
    if(empty($nome)){
        throw new InvalidArgumentException(message:"O nome não pode ser vazio");
    }
    $this->nome = ucwords(string: $nome);
    return $this;
}

public function setIdade(int $idade) : self
{
    if($idade < 0 || $idade > 120){
        throw new InvalidArgumentException(message:"A idade é inválida!");
    }
    $this->idade = $idade;
    return $this;
}

public function setCorCabelo(string $CorCabelo) : self
{
    $this->CorCabelo = $CorCabelo;
    return $this;
}

public function setSexo(string $sexo) : self
{
    $this->sexo = $sexo;
    return $this;
}

// ucwords - primeira letra maiúscula de cada palavra
// sexo - Sr. / Sra.
//Getters
public function getNome(): string{
    if($this->sexo == "Feminino"){
        return "Sra. " . ucwords(string: $this->nome);
    } elseif ($this->sexo == "Masculino"){
        return "Sr. " . ucwords(string: $this->nome);
    }
    return ucfirst(string: $this->nome);
}

public function getIdade(): string {
    return $this->IdadeEmExtenso() . " anos";
}


public function getCorCabelo(): string{
    return $this->CorCabelo;
}

public function getSexo(): string{
    return $this->sexo;
}


// Aniversário
public function aniversario() : string
{ 
    $this->idade=28;
    $this->idade++;
    return "É o aniversário da " . $this->nome . " logo agora tem " . $this->IdadeEmExtenso() . " anos";
} 
} 



?> 