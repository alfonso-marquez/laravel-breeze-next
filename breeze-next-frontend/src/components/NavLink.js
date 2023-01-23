import { NavLink as MantineNavLink } from '@mantine/core';

const NavLink = ({ children, ...props }) => (
    <MantineNavLink {...props} >
        {children}
    </MantineNavLink >
)

export default NavLink
