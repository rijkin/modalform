


<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#smallShoes">
Contact
</button>

<!-- The modal -->
<div class="modal fade" id="smallShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Contact</h4>
</div>

<div class="modal-body">
<?php echo $this->render ('entry',['model' => $entryForm])
?>
</div>

</div>
</div>
</div>
<?php



