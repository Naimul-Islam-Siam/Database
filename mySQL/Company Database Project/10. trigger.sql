DELIMITER $$
    create trigger gender_trigger
    before insert on employee
    for each row
    begin
        if new.sex = 'M' then
            set message_text = 'New MALE entry added';
        else if new.sex = 'F' then
            set message_text = 'New FEMALE entry added';
        else 
            set message_text = 'New entry added';
        end if;
    end $$
DELIMITER ;