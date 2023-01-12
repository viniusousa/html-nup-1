<?php



class Lembrete
{

    public array $formData;

    public function salvar()
    {

        $titulo = $this->formData['titulo'];
        $corpo = $this->formData['detalhe'];


        $dados_preenchidos = array(
            'codigo' => rand(1000, 9999) . "",
            'titulo' => $titulo,
            'corpo' => $corpo
        );

        $dados_preenchidos = array($dados_preenchidos);
        $dados_recuperados = array();

        
        if (file_exists("data/dados.json")) 
        {
            //Lê o conteúdo do arquivo e retona em uma string
            $content = file_get_contents("data/dados.json");
            
            if($content)
            {
                //Decodifica uma string JSON, passando o parametro true o object retornado será convertido em array associativo.
                $arrayContent = json_decode($content, true);
                
                //Adiciona o array valor no final do array dados recuperados
                foreach ($arrayContent as $valor) {
                    
                    array_push($dados_recuperados, $valor);
                }
            }
        }

        //combina os arrays
        $dados_merge = array_merge($dados_preenchidos, $dados_recuperados);
        
        $dados_json = json_encode($dados_merge);

        $fp = fopen("data/dados.json", "w");
        $escreve = fwrite($fp, $dados_json);
        fclose($fp);

        
    }



    public function listar($id)
    {
        $content = file_get_contents("data/dados.json");
        $arrayContent = json_decode($content); 
        $retorno = array();
        
        foreach($arrayContent as $value)
        { 
            if($value->codigo == $id)
            {
                $retorno[] = $value->titulo; 
                $retorno[] = $value->corpo; 

                
            }
        }
            return $retorno;        


    }
        

}