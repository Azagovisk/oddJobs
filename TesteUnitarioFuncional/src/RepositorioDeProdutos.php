<?php 
require_once("Sessao.php");
require_once("Produto.php");
// Classe responsável pela persistência e captura dos dados dos produtos
class RepositorioDeProdutos{
    private $produtos;

    public function RepositorioDeProdutos(){
        $this->carregarVetor();
    }

    private function carregarVetor()
    {
        /* Caso já tenha sido salvo o VETOR_PRODUTOS_PARA_TESTES na sessão, ele então, 
         * é recuperado para ser usado pelo repositório.
         * Caso contrário, se ainda não tenha sido salvo, significa que é a primeira vez
         * que o programa é usado por esse usuário, e com isso o vetor $produtos é inicializado
         * como vazio para começar a ser utilizado e salvo posteriormente.
         */ 
        $sessao = Sessao::getInstance();
        if ($sessao->existe("VETOR_PRODUTOS_PARA_TESTES"))
        {
            $this->produtos = $sessao->recuperar("VETOR_PRODUTOS_PARA_TESTES");
        }
        else{
            $this->produtos = array();
        }
    }
    // método responsável por salvar o vetor na sessão;
    // sempre que o vetor for alterado, deve ser salvo na sessão por esse método.
    private function salvarAlteracoesDoVetor()
    {
        Sessao::salvar("VETOR_PRODUTOS_PARA_TESTES", $this->produtos);
    }

    public function adicionar($produto)
    {
        if (empty($produto->numeroRegistro)){
            return false;
        }

        if(strlen($produto->numeroRegistro) < 6){
            return false;
        }

        if (empty($produto->descricao)){
            return false;
        }

        foreach ($this->produtos as $uniqueProduto) {
            if($uniqueProduto->numeroRegistro == $produto->numeroRegistro){
                return false;
            }
        }
        
        $this->produtos[] = $produto;
        //ao altarar o vetor, é salvo a alteração feita na sessão
        $this->salvarAlteracoesDoVetor();
        return  true;
    }
    public function atualizar($produto)
    {
        # code...
    }
    public function remover($produto)
    {
        // foreach ($this->produtos as $key => $value) {
        //     if($value->numeroRegistro == $produto->numeroRegistro){
        //         unset($this->produtos[$key]);
        //     }
        // }
    }
    public function buscarTodos()
    {
        /* por ter sido iniciado na inicialização da instância
         * caso não haja produtos no vetor, o retorno não é não 
         * um valor nulo mas sim, um array vazio.
        */
        return $this->produtos;
    }
    public function buscarPorNumeroRegistro($numeroRegistro)
    {
        foreach ($this->produtos as $produto) {
            if ($produto->numeroRegistro == $numeroRegistro)
            {
                return $produto;
            }
        }
        return null;
    }

    public function buscarPorDescricao($descricao)
    {
        $produtosArray = array();
        foreach ($this->produtos as $produto) {
            $pattern = '/' . $descricao. '/';
            if (preg_match($pattern, $produto->descricao)) {
                $produtosArray[] = $produto;
           }
        }
        $result = count($produtosArray);
        if($result == 0)
            return null;
        else
            return $produtosArray;
    }

}
?>