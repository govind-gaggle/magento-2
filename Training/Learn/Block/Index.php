<?php


namespace Training\Learn\Block;

class Index extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function name()
    {
        return "govind";
    }
    public function class()
    {
        return '<table class="table table-hover">
                <th> 
                    <td>id:</td>
                    <td>name:</td>
                    <td>class:</td>
                    <td>add:</td>
                </th>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>govind</td>
                        <td>cse</td>
                        <td>lko</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>govind</td>
                        <td>cse</td>
                        <td>lko</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>govind</td>
                        <td>cse</td>
                        <td>lko</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>govind</td>
                        <td>cse</td>
                        <td>lko</td>
                    </tr>
                </tbody>
                    </table>';
    }
}