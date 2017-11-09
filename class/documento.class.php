    <?php
        
class documento{
	private $id;
	private $nome;
        private $arquivo;
        
	private $tabela;
	private $link;
	
        function get_id() {
            return $this->id;
        }

        function get_nome() {
            return $this->nome;
        }

        function get_arquivo() {
            return $this->arquivo;
        }

        function get_tabela() {
            return $this->tabela;
        }

        function get_link() {
            return $this->link;
        }

        function set_id($id) {
            $this->id = $id;
        }

        function set_nome($nome) {
            $this->nome = $nome;
        }

        function set_arquivo($arquivo) {
            $this->arquivo = $arquivo;
        }

        function set_tabela($tabela) {
            $this->tabela = $tabela;
        }

        function set_link($link) {
            $this->link = $link;
        }
}