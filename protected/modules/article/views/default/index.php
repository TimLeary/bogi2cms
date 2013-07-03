<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>
<?php
    $this->widget('yiiExtensions\dynatree\Dynatree', array(
        'model' => $SiteStructure, // instance of CModel
        'attribute' => 'attributeName', 

        // Name of an event that will trigger update of hidden input value. Defaults to 'onActivate'.
        // @see http://wwwendt.de/tech/dynatree/doc/dynatree-doc.html#h5.1
        'updateInputValueEvent' => 'onActivate', 
    ));
?>