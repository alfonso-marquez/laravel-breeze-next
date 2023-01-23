import { Title, Text, Anchor } from '@mantine/core';
import useStyles from './Welcome.styles';

export function Welcome() {
  const { classes } = useStyles();

  return (
    <>
      <Title className={classes.title} align="center" mt={100}>
        Welcome to{' '}
        <Text inherit variant="gradient" component="span">
          HRIS
        </Text>
      </Title>
      <Text color="dimmed" align="center" size="lg" sx={{ maxWidth: 580 }} mx="auto" mt="xl">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut mollis lectus. Nam blandit egestas nisl ac aliquam. Proin sit amet enim nulla.
        <br/>
        <Anchor href="http://localhost:3000/login" size="lg">
         Login
        </Anchor>
        {' '} |{' '}
        <Anchor href="http://localhost:3000/dashboard" size="lg">
         Register
        </Anchor>
      </Text>
    </>
  );
}
