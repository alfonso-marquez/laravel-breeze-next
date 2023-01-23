import { Box as MantineBox } from '@mantine/core';

const Box = ({children, ...props}) => (
    <MantineBox {...props}>
        {children}
    </MantineBox>
)

export default Box;