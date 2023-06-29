<?php namespace ProcessWire;

class FormBuilderDefaultData extends WireData implements Module, ConfigurableModule {

	public static function getModuleConfigInputfields(array $data) {
		$inputfields = wire(new InputfieldWrapper());
		$f = wire('modules')->get('InputfieldTextarea');
		$f->attr('name', 'import_data');
		$f->label = 'Import data';
		$f->description = 'JSON data used as default import data for new Form Builder forms.';
		$f->notes = 'Note that if the import data field is manually filled in when creating the form, value in this field have no effect.';
		$f->rows = 20;
		$f->value = $data[$f->name] ?? '';
		$inputfields->add($f);
		return $inputfields;
	}

	public function init() {
		if (!$this->import_data) return;
		$this->addHookBefore('ProcessFormBuilder::executeAddForm', function(HookEvent $event) {
			if ($event->input->post->import_data) return;
			$event->input->post->import_data = $this->import_data;
		});
	}
}
