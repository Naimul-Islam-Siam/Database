-- deleting entries when they have FOREIGN KEYS associated with them

-- ON DELETE SET NULL will make the entries' values NULL
-- ON DELETE CASCADE will completely delete the entire row of that entry

-- when a FOREIGN KEY is also a PIMARY KEY, it's better to use ON DELETE CASCADE