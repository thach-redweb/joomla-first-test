<?php
defined('_JEXEC') or die('Restricted access admin/views/helloworlds/tmpl/default.php');
?>

<form action="index.php?option=com_helloworld&view=helloworlds" method="POST" id="adminForm" name="adminForm">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th width="1%"><?php echo JText::_('COM_HELLOWORLD_NUM'); ?></th>
                <th width="2%"><?php echo JHtml::_('grid.checkall'); ?></th>
                <th width="90%">
                    <?php echo JText::_('COM_HELLOWORLD_HELLOWORLDS_NAME'); ?>
                </th>
                <th width="5%">
                    <?php echo JText::_('COM_HELLOWORLD_PUBLISHED'); ?>
                </th>
                <th width="2%">
                    <?php echo JText::_('COM_HELLOWORLD_ID'); ?>
                </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">
                    <?php echo $this -> pagination -> getListFooter(); ?>
                </td>
            </tr>
        </tfoot>
        <tbody>
        <?php
            if(!empty($this -> items)):
                foreach($this -> items as $key => $item):
        ?>
            <tr>
                <td>
                    <?php echo $this -> pagination -> getRowOffset($key); ?>
                </td>
                <td>
                    <?php echo JHtml::_('grid.id', $key, $item -> id); ?>
                </td>
                <td>
                    <?php echo $item -> greeting; ?>
                </td>
                <td align="center">
                    <?php echo JHtml::_('jgrid.published', $item -> published, $key, 'helloworlds.',false,'cb'); ?>
                </td>
                <td align="center">
                    <?php echo $item -> id; ?>
                </td>
            </tr>
        <?php
                endforeach;
            endif;
        ?>
        </tbody>
    </table>
    <input type="hidden" name="boxchecked" value="0">
    <input type="hidden" name="task" value="">
</form>
