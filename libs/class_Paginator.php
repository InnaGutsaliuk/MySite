<?php
class Paginator {
	protected $page; //текущая страница
	protected $pageCount; //количество страниц
	protected $module; //имя модуля

	public function __construct($page, $pageCount, $module) {
		$this->page = $page;
		$this->pageCount = $pageCount;
		$this->module = $module;
	}

	public function getLinks() {
		$html = '';
		$html .= '<div class="pagination">';
		if(($this->page != 1) && ($this->pageCount > 1)) {
			$html .= '<a class="pag_link width_80" href="/'.$this->module.'&now_page='.($this->page-1).'"> PREV </a> ';
		}
		if($this->page >= 4) {
			$html .= '<a class="pag_link" href="/'.$this->module.'&now_page=1"> 1 </a> ';
			if($this->page != 4) $html .= ' ... ';
		}
		for ($i = 1; $i <= $this->pageCount; $i++) {
			if($i == $this->page) {
				$html .= '<span class="pag_link active_pag_link">'.$i.'</span>';
			} elseif($i == $this->page-1 || $i == $this->page-2 || $i == $this->page+1 || $i == $this->page+2) {
				$html .= "<a class='pag_link' href='/".$this->module."&now_page=$i'>$i</a> ";
			}
		}
		if(($this->page + 2) < $this->pageCount) {
			if($this->page != $this->pageCount-3) $html .= ' ... ';
			$html .= "<a class='pag_link' href='/'.$this->module.'&now_page=$this->pageCount'> $this->pageCount </a> ";
		}
		if($this->page != $this->pageCount) {
		$html .= '<a class="pag_link width_80" href="/'.$this->module.'&now_page='.($this->page+1).'"> NEXT </a> ';
		}
		$html .= '</div>';
		return $html;
	}
}




