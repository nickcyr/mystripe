<fieldset>
    <table>
        <tr>
            <td>
                <?=Form::open(array('url' => 'trans/send', 'method' => 'post'))?>
                <label for="cc">Credit Card Number:</label>
            </td><td>
                <?=Form::text('cc')?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="exp">Exp:</label>
            </td><td>
                <?=Form::text('exp')?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="exp">CV2:</label>
            </td><td>
                <?=Form::text('cv2')?>
            </td>
        </tr>
        <tr>
            <td>
                <?=Form::submit('Send')?>
                <?=Form::close()?>
            </td>
        </tr>
    </table>
</fieldset>
