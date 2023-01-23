
import { AuthenticationForm, } from '../components/AuthenticationForm/AuthenticationForm';
import { Box,Center } from '@mantine/core';
export default function Login() {
  return (
    <Center style={{ height: 700 }}>
      <Box  sx={(theme) => ({
        textAlign: 'center',
        padding: theme.spacing.xl,
        borderRadius: theme.radius.md,
        width: '600px',
      })}><AuthenticationForm />
      </Box>
  </Center>
  
  );
}
