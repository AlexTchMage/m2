<?php

namespace Training\Test\Plugin\Block;

class Template
{


	/* Task 1.8 point 2)

	public function afterToHtml(
		\Magento\Framework\View\Element\Template $subject,
		$result
	) {
		$result = '<div><p>' . $subject->getTemplate() . '</p>'
		. '<p>' . get_class($subject) . '</p>' . $result . '</div>';
		 return $result;
	}
	*/

	//Task 1.8 point 3)
	public function afterToHtml(
		\Magento\Framework\View\Element\Template $subject,
		$result
	) {
		if ($subject->getNameInLayout() == 'top.search') {
			$result = '<div><p>' . $subject->getTemplate() . '</p>'
			. '<p>' . get_class($subject) . '</p>' . $result . '</div>';
		}
		return $result;
	}


}